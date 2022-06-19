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
          <h2>Sélectionnez une famille</h2>
        <input type="hidden" name='action' value='familleReadOne'>
        <label for="nom">nom : </label> <select class="form-control" id='nom' name='nom'">
            <?php
            foreach ($results as $nom) {
             echo ("<option>$nom</option>");
            }
            ?>
        </select>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!--   fin viewNom -->

