  
<!-- ----- debut fragmentCaveJumbotron -->

<div class="jumbotron">
  
  <?php
    if (isset($_SESSION["nom_prenom"])){
          $value= $_SESSION["nom_prenom"];}
      else{
          $value= "Pas de famille selectionee";} 
  ?>
    
  <h1><?php $value ?> </h1>
</div>
<p/>
<!-- ----- fin fragmentCaveJumbotron --> 
