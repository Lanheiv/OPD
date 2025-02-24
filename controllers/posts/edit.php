<?php
    if (!Validator::number($_POST["id"])) {
        redirectIfNotFound();
    } 

    $sql = "SELECT * FROM fruits WHERE id = :id";
    $params = ["id" => $_POST["id"],];
    $fruits = $db->query($sql, $params)->fetch();

    if (!$fruits) {
        redirectIfNotFound();
    } 
    if(isset($_POST["name"])) {
        $errors = [];
        $params = ["id" => $fruits["id"], "name" => $_POST["name"]];
        $sql = "UPDATE fruits SET name = :name WHERE id = :id";

        if(!Validator::string($_POST["name"], min:2, max: 40)) {
            $errors["content"] = "Auglim jābūt 2 līdz 40 rakstzīmēm garam.";
        } else {
            $db->query($sql , $params);

            header("Location: /"); exit();
        } 
    }

    $pagatitle = "Augļa rediģēšana";
    require("views/posts/edit.view.php");
?>
