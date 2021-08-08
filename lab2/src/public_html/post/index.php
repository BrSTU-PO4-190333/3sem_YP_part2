<?php
    $title = "POST form";

    include '../_PHP-includes/header.php';
?>

<div class="container">
    <h2>Поля, которые будут отправлены методом POST</h2>
    <form method="post" action="/_PHP-scripts/form-script.php">
        <?php include '../_PHP-includes/form-inner.php'; ?>
    </form>
</div>
