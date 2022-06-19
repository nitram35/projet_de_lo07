
<!--   début viewNom -->

<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentMenu.html';
      include $root . '/app/view/fragment/fragmentJumbotron.php';
    ?> 

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
          <h2>Sélection d'un individu</h2>
         <!-- On cache le champ puis on affiche la page de l'individu -->
        <input type="hidden" name='action' value='individuPage'>   
        
        <!-- On retrouve les noms et prénoms de l'indiv de la famille selected afin de récupérer l'id -->
        <label for="id">Sélectionnez un individu de la famille </label><select class="form-control" id="id" name="id">
            <?PHP
            foreach ($results as $element){
                echo "<option value=".$element->getId().">".$element->getNom()." : ".$element->getPrenom()."</option>";
            }
            ?>
        </select><br>
  
      <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
      </div>
    </form>
    
  </div>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewNom -->