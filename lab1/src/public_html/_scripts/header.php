<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="/_styles/bootstrap.min.css" />
        <link rel="stylesheet" href="/_styles/my_styles.css" />
    </head>

    <body>
        <div class="container">
            <h2><?php echo $title; ?></h2>

            <?php
                if ($_SERVER['REQUEST_URI'] != "/")
                {
                    echo '<a href="/">На главную</a>';
                }
            ?>
            
        </div>