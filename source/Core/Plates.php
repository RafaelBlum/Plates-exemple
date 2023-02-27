<?php


namespace Source\Core;


use League\Plates\Engine;

class Plates
{
    private $engine;

    /**
     * Constructor create uma instancia do Plate engine
     * @var $path: caminho das views
     * @var $ext: type extension, default is html
    */
    public function __construct(string $path = CONF_BASE_DIR, string $ext = CONF_EXT)
    {
        $this->engine = Engine::create($path, $ext);
    }

    /**
     * Method addFolder: Para criar pastas organizadas, use o método addFolde
     * https://platesphp.com/engine/folders/
     * return propria View engine
     */
    public function pathFolder(string $name, string $path): Plates
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    /**
     * Method render
     * metodo para renderizar as views e passar dados
    */
    public function render(string $template, array $data = []): string
    {
        return $this->engine->render($template, $data);
    }

    /**
     * @return Engine
     * metodo para retornar a engine plates
     */
    public function engine(): Engine
    {
        return $this->engine;
    }
}