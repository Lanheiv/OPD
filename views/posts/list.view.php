<?php require("views/components/header.php");?>
<?php require("views/components/navbar.php");?>

<div class="table">

    <h1>Augļu Saraksts</h1>

    <form>
        <input name="q" type="text" value="<?= $_GET["q"] ?? '' ?>">
        <button>Meklēt</button>
    </form>

    <ul>
        <?php if(count($posts) == 0) { ?>
            <li>
                <h3>Nav nekādu datu tabulā</h3>
            </li>
        <?php } else { ?>

        <?php foreach($posts as $posts) {?>
            <li class="table-item">
                <a href="/show?id=<?= $posts["id"] ?>"> <?= htmlspecialchars($posts["name"]);?></a>
            </li>
        <?php } } ?>
    </ul>
</div>

<?php require("views/components/footer.php"); ?>