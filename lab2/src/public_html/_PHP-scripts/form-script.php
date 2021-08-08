<?php
    $title = "getted GET/POST form fields";

    include '../_PHP-includes/header.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $post_name      = isset($_POST['post-name'])    ? $_POST['post-name']       : "-";
        $link_to_post   = isset($_POST['link-to-post']) ? $_POST['link-to-post']    : "-";
        $link_to_img    = isset($_POST['link-to-img'])  ? $_POST['link-to-img']     : "-";
        $page_type      = isset($_POST['page-type'])    ? $_POST['page-type']       : "-";
        $hidden_page    = isset($_POST['hidden-page'])  ? $_POST['hidden-page']     : "-";
    }
    elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $post_name      = isset($_GET['post-name'])     ? $_GET['post-name']        : "-";
        $link_to_post   = isset($_GET['link-to-post'])  ? $_GET['link-to-post']     : "-";
        $link_to_img    = isset($_GET['link-to-img'])   ? $_GET['link-to-img']      : "-";
        $page_type      = isset($_GET['page-type'])     ? $_GET['page-type']        : "-";
        $hidden_page    = isset($_GET['hidden-page'])   ? $_GET['hidden-page']      : "-";
    }
?>

<div class="container">
    <h2>$_SERVER['REQUEST_METHOD']</h2>
    <p><?php print_r($_SERVER['REQUEST_METHOD']); ?></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Имя поста</th>
                <th scope="col">Ссылка на пост</th>
                <th scope="col">Ссылка на картинку поста</th>
                <th scope="col">Категория страницы</th>
                <th scope="col">Скрывать страницу</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $post_name ?></td>
                <td><?= $link_to_post ?></td>
                <td><?= $link_to_img ?></td>
                <td><?= $page_type ?></td>
                <td><?= $hidden_page ?></td>
            </tr>
        </tbody>
    </table>

    <?php include '../_PHP-includes/arraySERVER.php'; ?>
</div>
