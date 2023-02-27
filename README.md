#### Trabalhando com Plates Engine

<p align="center">Implementando um sistema simple e nativo do PHP.</p>


#### Introdução
O Plates engine serve para facilitar e organização dos templates do seu projeto, tornando o envio e exibição de 
informações para estas páginas um processo mais simples e organizado na camada de visão. Alguns dos destaques que 
podemos cita é a reutilização de códigos, blocos HTML e utilização das funções do PHP, entre outras destacadas 
no [`site do proprio Plates`](https://platesphp.com/).

<br>

##### Projeto

Neste simples projeto demonstro como funciona implementação de um dos componente mais poderosos, o `Plates Engine`.
###### É um projeto bem simples com total intuito de desmonstrar a utilização basica do componente.

- Instalar o [`composer`](https://git-scm.com/)
- PHP versão `7.4`
- Plates Engine versão `v4.0.0-alpha`


<br>


#### Descrição do projeto simples

- No diretório templates, será onde fica a camada de views do projeto e neste diretório podemos trabalhar com blocos de páginas
HTML e assim montando as páginas do projeto conforme forem as necessidades e reduzindo repetição dos códigos. 
Nestas views, trabalhamos com a linguagem estrutural e comandos do proprio Plates.


###### Utilização do objeto view `v`
Com este objeto do Plates, podemos utilizar toda lógica de comando nativos que o componente disponibiliza.

- Chamanda o layout template
```
<?= $v->section('content'); ?>
```

- A página template chama o layout base pasando dados e com parametros recebidos do controller
```
<?php $this->layout('template', ['title' => 'User Profile']) ?>
<p><?= "{$user->getName()}"; ?></p>
```
 
- Criei uma classe Plates para abstrair a camada de controle da engine, assim podemos ao iniciar a view, já instanciar a
engine no construtor e criar metodos para renderizar as view e já enviado todos dados necessários de cada página, 
adicionar pastas e também trazer de volta a instancia da view engine.

<br>

Contato [rafaelblum_digital@hotmail.com](rafaelblum_digital@hotmail.com)

[![Youtube Badge](https://img.shields.io/badge/-Youtube-FF0000?style=flat-square&labelColor=FF0000&logo=youtube&logoColor=white&link=https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)](https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)
[![Linkedin Badge](https://img.shields.io/badge/-LinkedIn-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-blum-237133114s/)](https://www.linkedin.com/in/rafael-blum-237133114s/)
[![Instagram Badge](https://img.shields.io/badge/-Instagram-violet?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/rafablum_/)](https://www.instagram.com/rafablum_/)

