<?php require("views/components/header.php"); ?>
<?php require("views/components/navbar.php"); ?>

<main>

    <h1>Augļa Rediģēšana</h1>

    <form method="POST">
        <input name="name" type="text" value="<?= $_POST["name"] ?? $fruits["name"] ?>">
        <input type="hidden" name="id" value="<?= $_POST["id"] ?>">

        <button>Pievienot</button>
    </form>

    <?php if(isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>
</main>

<?php require("views/components/footer.php"); ?>