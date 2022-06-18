
<!-- ----- debut Router1 -->
<?php
require('../controller/ControllerFamille.php');
require('../controller/ControllerAccueil.php');
require('../controller/ControllerEvenement.php');
require ('../controller/ControllerIndividu.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

$action = $param["action"];
unset($param["action"]);
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "familleReadAll" :
    case "familleCreate":
    case"familleCreated":
    case "familleReadOne" :
    case "familleReadNom" :

  ControllerFamille::$action($args);
  break;

    case "evenementReadAll" :
    case "evenementCreate" :

    ControllerEvenement::$action($args);
    break;

    case "lienReadAll" :


        ControllerLien::$action($args);
        break;

    case "individuReadAll" :


        ControllerIndividu::$action($args);
        break;

 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerAccueil::$action($args);
}
?>
<!-- ----- Fin Router1 -->

