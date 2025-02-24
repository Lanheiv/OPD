<?php   
    $sql = "SELECT * FROM fruits WHERE id = :id";
    $params = ["id" => $_GET["id"]];

    $post = $db->query($sql, $params)->fetch();

    if (!$post || !isset($_GET["id"]) || !is_numeric($_GET["id"])) {
        redirectIfNotFound();
    }

    $pagatitle = "Augļa iestatījumi";
    require("views/fruits/show.view.php");
?>