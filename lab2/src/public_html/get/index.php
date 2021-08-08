<?php
    $title = "GET form";

    include '../_PHP-includes/header.php';
?>

<div class="container">
<h2>Поля, которые будут отправлены методом GET</h2>
    <form method="get" action="/_PHP-scripts/form-script.php">
        <?php include '../_PHP-includes/form-inner.php'; ?>
    </form>
</div>
