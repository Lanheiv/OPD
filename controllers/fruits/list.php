<?php
    $select = "SELECT * FROM fruits";
    $params = [];

    if (!empty($_GET["q"])) {
        $search = "%" . $_GET["q"] . "%";
        $select .= " WHERE name LIKE :content";
        $params = ["content" => $search];
    } else {
        $params = [];
    }

    $posts = $db->query($select , $params)->fetchAll();

    require("views/fruits/list.view.php");
?>