<?php $v->layout('admin::layout', ['title' => 'Lista usuários', 'company'=> 'Plates engine']) ?>


<?php $v->push('style') ?>
    <link rel="stylesheet" type="text/css" href="./assets/users-style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $v->end() ?>

<?php $v->start('nav-list'); ?>
    <ul class="breadcrumb">
        <li><a href="./">Home</a></li>
        <li><a href="./">Lista de usuários</a></li>
        <li>Total <?= count($users); ?></li>
    </ul>
<?php $v->stop(); ?>

<div class="container-users">
    <?php foreach ($users as $k => $user): ?>
        <section class="container flex">
            <div class="item">
                <h1><?= "{$user->getName()}"; ?></h1>
                <p><?= "Matricula de usuário id {$user->getId()}"; ?> - <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i></p>
                <a class="link" href="?id=<?=$user->getId(); ?>" title="editar">Editar</a>
            </div>
        </section>

    <?php endforeach; ?>
</div>


<?php $v->push('scripts') ?>
<script>
    function myFunction(x) {
        x.classList.toggle("fa-thumbs-down");
    }
</script>
<?php $v->end() ?>
