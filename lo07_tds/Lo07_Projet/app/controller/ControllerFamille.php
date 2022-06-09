
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

// Affiche le formulaire de creation d'une famille
    public static function familleCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInsert.php';
        require ($vue);
    }
// Affiche un formulaire pour récupérer les informations d'une nouvelle famille.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function familleCreated() {
        // ajouter une validation des informations du formulaire
        if ($_GET['nom'] == ''){
            $results = -1;
        }
        else{
            $results = ModelFamille::insert(htmlspecialchars($_GET['nom'])
            );
        }
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInserted.php';
        require ($vue);
    }

 
}
?>
<!-- ----- fin ControllerVin -->


