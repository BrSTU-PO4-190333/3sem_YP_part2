<?php
    $title = "Проверка работы ЯР HTML в ЯП PHP";
    include ("../_scripts/header.php");
?>

<div class="container">

    <hr />
    <h3>HTML и PHP</h3>

    <xmp>
        <p>Всякий HTML</p>
        < ?php
            echo "<p>Здесь отрабатывается PHP</p>";

            $a = 3;
            $b = 4;
            $result = $a * $b;

            echo "<p>a * b = $a * $b = $result</p>";

            echo "<p>Здесь отрабатывается PHP</p>";
        ?>
        <p>Продолжение HTML</p>
    </xmp>

    <p>Всякий HTML</p>
    <?php
        echo "<p>Здесь отрабатывается PHP</p>";

        $a = 3;
        $b = 4;
        $result = $a * $b;

        echo "<p>a * b = $a * $b = $result</p>";

        echo "<p>Здесь отрабатывается PHP</p>";
    ?>
    <p>Продолжение HTML</p>
</div>