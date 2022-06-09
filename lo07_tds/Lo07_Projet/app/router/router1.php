
<!-- ----- debut Router1 -->
<?php
require('../controller/ControllerFamille.php');
require('../controller/ControllerAccueil.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
 case "familleReadAll" :

  ControllerFamille::$action();
  break;

 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerAccueil::$action();
}
?>
<!-- ----- Fin Router1 -->

