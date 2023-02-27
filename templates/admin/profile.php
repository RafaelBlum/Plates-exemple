<?php $v->layout('admin::layout', ['title' => $user->getName(), 'company'=> 'Plates engine']) ?>

<?php $v->push('style') ?>
    <link rel="stylesheet" type="text/css" href="./assets/users-style.css">
<?php $v->end();?>

<div class="profile">Hello, <?= "{$user->getName()}" ?></div>

<section class="container flex">
    <div class="item">
        <h1><?= "{$user->getName()}"; ?></h1>
        <p><?= "Matricula id {$user->getId()}"; ?></p>
        <a href="./" title="back">voltar</a>
    </div>
</section>