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

    <form role="form" method='get' action='router1.php'>
        <div class="form-group">
            <input type="hidden" name='action' value='familleCreated'>
            <label for="id">nom: </label><input type="text" name='nom' size='75' value='Deschamps'>
        </div>
        <p/>
        <button class="btn btn-primary" type="submit">Soumettre</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->
