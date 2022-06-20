<?php
require_once '../model/ModelEvenement.php';
require_once '../model/ModelIndividu.php';

class ControllerEvenement
{

    //Liste des evenements
    public static function evenementReadAll()
    {
        $results = ModelEvenement::getAll();
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/evenement/viewAll.php';
        if (DEBUG)
            echo("ControllerFamille : evenementReadAll : vue = $vue");
        require($vue);
    }

    public static function evenementCreate()
    {
        //on recup les indiv
        $results = ModelIndividu::getAll();
        //   Construction chemin de la vue pour ajouter un evenemnt
        include 'config.php';
        $vue = $root . '/app/view/evenement/viewInsert.php';
        require($vue);
    }

    public static function evenementCreated()
    {
        $results = ModelEvenement::insert(htmlspecialchars($_GET['id']), htmlspecialchars($_GET['type']), htmlspecialchars($_GET['date']), htmlspecialchars($_GET['lieu']));

        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/evenement/viewInserted.php';
        require($vue);
    }

}

?>
<!--   fin Controller -->