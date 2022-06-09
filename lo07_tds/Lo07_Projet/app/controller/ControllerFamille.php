
<!-- ----- debut ControllerVin -->
<?php
require_once '../model/ModelFamille.php';

class ControllerFamille {

 // --- Liste des vins
 public static function familleReadAll() {
  $results = ModelFamille::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/famille/viewAll.php';
  if (DEBUG)
   echo ("ControllerFamille : familleReadAll : vue = $vue");
  require ($vue);
 }




 
}
?>
<!-- ----- fin ControllerVin -->


