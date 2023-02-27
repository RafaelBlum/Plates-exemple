<?php
require __DIR__ . "/vendor/autoload.php";

session_start();

/**
 * Injeção de dependencia do Plates
*/
$view = new \Source\Core\Plates();

/**
 * Criando pastas: facilitam muito a organização e o acesso a suas páginas.
*/
$view->pathFolder("admin", "admin");
$view->pathFolder("public", "public");

$list = [];

array_push($list, new \Source\Model\User(1, "Rafael"));
array_push($list, new \Source\Model\User(2, "Lucas"));
array_push($list, new \Source\Model\User(3, "Paulo"));
array_push($list, new \Source\Model\User(4, "Max"));


/**
 * Renderização da listagem de usuário ou perfil
*/
if(empty($_GET['id'])) {
    echo $view->render("admin::users", [
        "title"=> "Lista usuários",
        "users" => $list
    ]);
}else{
    $index = $_GET['id'] -= 1;
    echo $view->render("admin::profile", [
        "title"=> "Home",
        "user"=> $list[$index]
    ]);
}

