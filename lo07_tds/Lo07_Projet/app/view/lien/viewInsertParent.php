
<!--   début viewInsertParent -->

<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<div>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentMenu.html';
      include $root . '/app/view/fragment/fragmentJumbotron.php';
    ?> 

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <h2>Ajout d'un lien enfant/parent</h2>
        <input type="hidden" name='action' value='lienParentCreated'>  
        <!-- On choisit l'enfant -->
        <label for="id_enfant">Sélectionnez un enfant : </label><select class="form-control" id="id_enfant" name="id_enfant">
            <?PHP
            foreach ($results as $element){
                echo "<option value=".$element->getId().">".$element->getNom()." : ".$element->getPrenom()."</option>";
            }
            ?>
        </select><br>
        
        <!-- On choisit le parent -->
        <label for="id_parent">Sélectionnez un parent : </label><select class="form-control" id="id_parent" name="id_parent">
            <?PHP
            foreach ($results as $element){
                echo "<option value=".$element->getId().">".$element->getNom()." : ".$element->getPrenom()."</option>";
            }
            ?>
        </select><br>
      </div>

      <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>

    </form>


</div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewInsertParent -->