<?php $v->layout('admin::layout', ['title' => 'Home page']) ?>

<h1>Home</h1>
<p>pagina inicial</p>

<?php if($v->section("public::home")): ?>
    <?=  $v->insert("public::sidebar");?>
<?php else: ?>
    <p class="msg-success">Lista de usuários</p>
<?php endif; ?>




