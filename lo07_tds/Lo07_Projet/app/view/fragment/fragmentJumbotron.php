<!--   debut fragmentJumbotron -->

<?php 

if (isset($_SESSION['titre_jumbotron']))
    $titre = $_SESSION['titre_jumbotron'];

?>

<div class="jumbotron">
    <h1> <?php 
    
    if ($titre == "Aucune famille sélectionnée"){
      echo "$titre";  
    } else {
      echo "FAMILLE $titre";  
    }
     
    
    ?> </h1>
</div>
<p/>
<!--   fin fragmentJumbotron -->

