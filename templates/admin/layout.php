<html>
<head>
    <link rel="stylesheet" type="text/css" href="./assets/style.css">

    <!--    -->
    <?=$v->section('style')?>

    <!--    -->
    <title><?= $title; ?> | <?=$company;?></title>
</head>
<body>

<div class="header">
    <h1>Plates Engine</h1>
    <p>Working with Plate Engine - Implementing a simple and native PHP system</p>
</div>

<?php if($v->section("nav-profile")): ?>
    <nav class="msg-info"><?= $v->section("nav-profile"); ?></nav>
<?php elseif($v->section("nav-list")): ?>
    <nav class="msg-info"><?= $v->section("nav-list"); ?></nav>
<?php else: ?>
    <p class="msg-success">Home page</p>
<?php endif; ?>

<!---->
<?=$v->section('content')?>

<!---->
<?=$v->section('scripts')?>

</body>
</html>