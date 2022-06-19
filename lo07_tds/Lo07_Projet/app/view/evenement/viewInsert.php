
<!--   début viewInsert -->

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
          <h2>Ajoutez un évènement</h2>
         <!-- On cache ce champ pour créer un evenement après-->
        <input type="hidden" name='action' value='evenementCreated'>   
        
        <!-- On retrouve tout les noms et prénoms des indiv de la famille sélectionné pour récupérer l'id -->
        <label for="id">Sélectionnez un individu de la famille : </label><select class="form-control" id="id" name="id">
            <?PHP
            foreach ($results as $element){
                echo "<option value=".$element->getId().">".$element->getNom()." : ".$element->getPrenom()."</option>";
            }
            ?>
        </select><br>
                
        <!--On choisit le type d'evenement que l'on souhaite-->
        <label for="type">Sélectionnez un type d'évènement : </label><select class="form-control" id="type" name="type">
            <option value='NAISSANCE'>NAISSANCE</option>
            <option value='DECES'>DECES</option>
        </select><br>
        
        <!--On insère la date de l'evenement-->
        <label for="date">Date (AAAA-MM-JJ) ? </label><input class="form-control" type="text" name='date' size='75' value='' placeholder="Saisissez la date de l'évènement"><br>


        <!--On insère le lieu de l'evenement-->
        <label for="lieu">Lieu ? </label><input class="form-control" type="text" name='lieu' size='75' value='' placeholder="Saisissez le lieu de l'évènement"><br>
      </div>


      <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
    </form>
    
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewInsert -->