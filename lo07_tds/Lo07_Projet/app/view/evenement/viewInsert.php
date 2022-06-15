<!-- ----- début viewInsert -->

<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <form role="form" method='get' action='router1.php'>
        <input type="hidden" name='action' value='evenementCreated'>

        <div class="form-group">
            <label for="individu">Selectionnez un individu :</label>
            <select id="individu" class='form-control' name="iid">
                <?php
                foreach ($resultsIndividu as $element) {
                    echo("<option value='".$element->getIid()."'>".$element->getNom()." : ".$element->getPrenom()."</option>");
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="type">Selectionnez un type d'evenement :</label>
            <select id="type" class='form-control' name="event_type">
                <option value="naissance">NAISSANCE</option>
                <option value="deces">DECES</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">Date (AAAA-MM-JJ) : </label>
            <input type="text" name='event_date' size='75' value='2020-06-24'>
        </div>

        <div class="form-group">
            <label for="lieu">Lieu ? : </label>
            <input type="text" name='event_lieu' size='75' value='Troyes'>
        </div>

        <p/>

        <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



