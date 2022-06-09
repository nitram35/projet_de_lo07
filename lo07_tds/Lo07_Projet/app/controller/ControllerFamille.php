
<!-- ----- debut ControllerVin -->
<?php
require_once '../model/ModelFamille.php';

class ControllerFamille {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerFamille : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des vins
 public static function familleReadAll() {
  $results = ModelFamille::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/vin/viewAll.php';
  if (DEBUG)
   echo ("ControllerFamille : familleReadAll : vue = $vue");
  require ($vue);
 }




 
}
?>
<!-- ----- fin ControllerVin -->


