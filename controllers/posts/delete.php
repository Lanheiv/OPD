<?php
    if (!Validator::number($_POST["id"])) {
        redirectIfNotFound();
    }

    $params = ["id" => $_POST["id"]];
    $sql = "DELETE FROM fruits WHERE id = :id";

    $db->query($sql , $params);

    header("Location: /"); exit();

?>