<!-- ----- début viewInsert -->

<?php
session_start();
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.php';
    ?>
    <h2>Ajout d'une famille</h2>
    <form role="form" method='get' action='router1.php'>

        <div class="form-group">

            <input type="hidden" name='action' value='familleCreated'>
            <label for="nom">nom: </label><input type="text" name='nom' size='75' value='Deschamps'>
        </div>
        <p/>
        <button class="btn btn-primary" type="submit">Soumettre</button>
    </form>
    <p/>
</div>
</body>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->
