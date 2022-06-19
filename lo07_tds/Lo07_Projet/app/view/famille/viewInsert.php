
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
          <h2>Ajoutez une famille</h2>
        <input type="hidden" name='action' value='familleCreated'>        
        <label for="id">Nom : </label><input class="form-control" type="text" name='nom' value='' placeholder="Insérez un nom">
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewInsert -->