<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<h1>Izveidot bloga ierakstu</h1>

<form method="POST">
    <input name="fruit" type="text" placeholder="Šeit pievienojat augli" value="<?= $_POST['fruit'] ?? '' ?>">

    <button>Pievienot</button>
</form>    

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>