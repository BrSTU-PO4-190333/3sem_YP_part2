<?php
    $title = "Проверка ЯП PHP";
    include ("../_scripts/header.php");
?>

<div class="container">

    <hr />
    <h3>Привет мир на PHP <code>< ?php echo ...; ?></code></h3>

    <xmp>
        <p>
            < ?php
                echo "Привет, мир!";
            ?>
        </p>
    </xmp>

    <p>
        <?php
            echo "Привет, мир!";
        ?>
    </p>

    <!--  -->

    <hr />
    <h3>Переменные в PHP <code>< ?php $peremenay = ...; ?></code></h3>

    <xmp>
        < ?php
            $a = 3;
            $b = 4;

            $result = $a + $b;
            echo "<p>a + b = $result</p>";

            $result = $a - $b;
            echo "<p>a - b = $result</p>";

            $result = $a * $b;
            echo "<p>a * b = $result</p>";

            $result = $a / $b;
            echo "<p>a / b = $result</p>";

            $result = $a % $b;
            echo "<p>a % b = $result</p>";

            $result = $b % $a;
            echo "<p>b % a = $result</p>";
        ?>
    </xmp>

    <?php
        $a = 3;
        $b = 4;

        $result = $a + $b;
        echo "<p>a + b = $result</p>";

        $result = $a - $b;
        echo "<p>a - b = $result</p>";

        $result = $a * $b;
        echo "<p>a * b = $result</p>";

        $result = $a / $b;
        echo "<p>a / b = $result</p>";

        $result = $a % $b;
        echo "<p>a % b = $result</p>";

        $result = $b % $a;
        echo "<p>b % a = $result</p>";
    ?>


    <!--  -->



</div>