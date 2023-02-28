<?php $v->layout('admin::layout', ['title' => $user->getName(), 'company'=> 'Plates engine']) ?>

<?php $v->push('style') ?>
    <link rel="stylesheet" type="text/css" href="./assets/users-style.css">
<?php $v->end();?>

<?php $v->start('nav-profile'); ?>
    <ul class="breadcrumb">
        <li><a href="./">Home</a></li>
        <li><a href="./">Lista de usuários</a></li>
        <li><a href="?id=<?=$user->getId(); ?>">Perfil</a></li>
        <li><?= "{$user->getName()}" ?></li>
    </ul>
<?php $v->stop(); ?>

<section class="container flex-profile">
    <div class="item">
        <h1><?= "{$user->getName()}"; ?></h1>
        <p><?= "Matricula id {$user->getId()}"; ?></p>
        <a class="link" href="./" title="back">voltar</a>
    </div>
</section>