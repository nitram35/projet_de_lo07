 
<!-- ----- debut de la page cave_acceuil -->
<?php 
session_start();
include 'fragment/fragmentCaveHeader.html'; 
?>
<body>
  <div class="container">
    <?php
    include 'fragment/fragmentCaveMenu.html';
    include 'fragment/fragmentCaveJumbotron.php';
    ?>
  </div>   
  
  
  <?php
  include 'fragment/fragmentCaveFooter.html';
  ?>

  <!-- ----- fin de la page cave_acceuil -->

</body>
</html>