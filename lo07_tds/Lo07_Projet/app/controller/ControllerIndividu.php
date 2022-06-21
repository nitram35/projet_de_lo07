<!--   debut ControllerIndividu -->

<?php
require_once '../model/ModelIndividu.php';

class ControllerIndividu
{
//liste de sindiv
    public static function individuReadAll()
    {
        $results = ModelIndividu::getAll();
        //   Construction chemin de la vue
        include 'config.php';

        $vue = $root . '/app/view/individu/viewAll.php';
        if (DEBUG)
            echo("ControllerIndividu : individuReadAll : vue = $vue");
        require($vue);
    }

    // formulaire de creation d'un indiv
    public static function individuCreate()
    {
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/individu/viewInsert.php';
        require($vue);
    }

    public static function individuCreated()
    {
        //On valide les infos du formulaire

        if ($_GET['nom'] == '' || $_GET['prenom'] == '' || $_GET['sexe'] == '') {
            $results = -1;
        } else {
            $results = ModelIndividu::insert(htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['sexe']));
        }
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/individu/viewInserted.php';
        require($vue);
    }

//On veut afficher les infos d'un indiv selectionné
    public static function individuReadOne()
    {
        $results = ModelIndividu::getAll();

        //On construit la vue pour choisir un indiv
        include 'config.php';
        $vue = $root . '/app/view/individu/viewNom.php';
        require($vue);
    }

    public static function individuPage($arg)
    {
        //On va demander toutes les infos sur un indiv de la famille selected
        $results = ModelIndividu::getInformations($arg['id']);

        //On construit la vue page d'un indiv (!!! partie la plus complexe du projet)
        include 'config.php';
        $vue = $root . '/app/view/individu/viewPageIndividu.php';
        require($vue);
    }
} ?>
<!--   fin Controller -->