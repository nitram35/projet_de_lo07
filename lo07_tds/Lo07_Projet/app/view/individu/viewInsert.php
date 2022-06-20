
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
          <h2>Ajout d'un individu dans la famille</h2>
        <input type="hidden" name='action' value='individuCreated'>  
        <label for="nom">Nom : </label>
          <input class="form-control" type="text" name='nom' size='75' value='' placeholder="Saisissez un nom"><br>
        
        <label for="prenom">Prenom : </label>
          <input class="form-control" type="text" name='prenom' size='75' value='' placeholder="Saisissez un prénom"><br>

        <p>Quelle est son sexe ?</p>
          <label class='radio-inline'><input type="radio" name="sexe" value='H'>Masculin</label>
          <label class='radio-inline'><input type="radio" name="sexe" value='F' checked>Féminin</label>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewInsert -->