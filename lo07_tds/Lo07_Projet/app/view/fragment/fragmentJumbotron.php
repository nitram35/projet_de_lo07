<!--   debut fragmentJumbotron -->

<?php 

if (isset($_SESSION['titre_jumbotron']))
    $titre_jumbotron = $_SESSION['titre_jumbotron'];

?>

<div class="jumbotron">
    <h1> <?php 
    
    if ($titre_jumbotron == "Aucune famille sélectionnée"){
      echo "$titre_jumbotron";
    } else {
      echo "FAMILLE $titre_jumbotron";
    }

    ?> </h1>
</div>
<p/>
<!--   fin fragmentJumbotron -->

