<?php
    $sql = "SELECT * FROM fruits";
    $params = [];
    $categories = $db->query($sql , $params)->fetchAll();

    if (isset($_POST["fruit"])){
        $errors = [];

        $params = ["fruit" => $_POST["fruit"]];
        $sql = "INSERT INTO fruits (name) VALUES (:fruit);";

        //dd($params);

        if(!Validator::string($_POST["fruit"], min:2, max: 40)) {
            $errors["content"] = "Auglim jābūt 2 līdz 40 rakstzīmēm garam.";
        } else {
            $db->query($sql , $params);
            header("Location: /"); exit();
        }   
    }

    $pagatitle = "Pievienot augli";
    require("views/fruits/create.view.php");
?>