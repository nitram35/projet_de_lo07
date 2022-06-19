<!--   début viewInsertUnion -->

<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.php';
    ?>

    <form role="form" method='get' action='router.php'>
        <div class="form-group">
            <h2>Ajout d'une union</h2>
            <input type="hidden" name='action' value='lienUnionCreated'>
            <!-- On choisit un homme -->
            <label for="id_homme">Sélectionnez un homme : </label><select class="form-control" id="id_homme"
                                                                          name="id_homme">
                <?PHP
                foreach ($results as $element) {
                    if ($element->getSexe() == 'H')
                        echo "<option value=" . $element->getId() . ">" . $element->getNom() . " : " . $element->getPrenom() . "</option>";
                }
                ?>
            </select><br>

            <!-- On choisit une femme -->
            <label for="id_femme">Sélectionnez une femme : </label><select class="form-control" id="id_femme"
                                                                           name="id_femme">
                <?PHP
                foreach ($results as $element) {
                    if ($element->getSexe() == 'F')
                        echo "<option value=" . $element->getId() . ">" . $element->getNom() . " : " . $element->getPrenom() . "</option>";
                }
                ?>
            </select><br>

            <!--On choisit-->
            <label for="type">Sélectionnez un type d'union : </label><select class="form-control" id="type" name="type">
                <option value='COUPLE'>COUPLE</option>
                <option value='DIVORCE'>DIVORCE</option>
                <option value='SEPARATION'>SEPARATION</option>
                <option value='MARIAGE'>MARIAGE</option>
                <option value='PACS'>PACS</option>


            </select><br>

            <!--On choisit la date de l'union-->
            <label for="date">Date (AAAA-MM-JJ) ? </label><input class="form-control" type="text" name='date' size='75' value='' placeholder="Saisissez une date de la forme AAAA-MM-JJ"><br>

            <!--On choisit le lieu de l'union-->
            <label for="lieu">Lieu ? </label><input class="form-control" type="text" name='lieu' size='75' value='' placeholder="Saisissez le lieu de l'union"><br>

            <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
        </div>
    </form>
</div>

<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewInsertUnion -->