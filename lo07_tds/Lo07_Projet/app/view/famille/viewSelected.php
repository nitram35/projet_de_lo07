
<!--   début viewselected -->
<?php

require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
        include $root . '/app/view/fragment/fragmentMenu.html';
        include $root . '/app/view/fragment/fragmentJumbotron.php';
        ?>

      <h2>La sélection est confirmée</h2>
        <?php
        echo("<h4>Vous avez sélectionné la famille suivante -><b>".$_SESSION['titre_jumbotron']."</b></h4>");
        ?>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!--   fin viewselected -->
