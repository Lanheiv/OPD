<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<h1 class="center"><?= htmlspecialchars($post["name"]) ?></h1>

<form method="POST" action="/edit">
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <button>Rediģēt</button>
</form>

<form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <button>Dzēst</button>
</form> 

<?php require("views/components/footer.php");?>