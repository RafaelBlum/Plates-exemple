<?php $v->layout('admin::layout', ['title' => 'Lista usuários', 'company'=> 'Plates engine']) ?>


<?php $v->push('style') ?>
    <link rel="stylesheet" type="text/css" href="./assets/users-style.css">
<?php $v->end() ?>

<p>Total usuários: <?= count($users); ?></p>

<?php foreach ($users as $k => $user): ?>
    <section class="container flex">
        <div class="item">
            <h1><?= "{$user->getName()}"; ?></h1>
            <p><?= "Matricula de usuário id {$user->getId()}"; ?></p>
            <a href="?id=<?=$user->getId(); ?>" title="editar">Editar</a>
        </div>
    </section>

<?php endforeach; ?>



<?php $v->push('scripts') ?>
<script>
    // JavaScript
</script>
<?php $v->end() ?>
