<!--   debut ControllerFamille -->
<?php
require_once '../model/ModelFamille.php';

class ControllerFamille
{

    //Liste des familles
    public static function familleReadAll()
    {
        $results = ModelFamille::getAll();
        //   Construction chemin de la vue
        include 'config.php';

        $vue = $root . '/app/view/famille/viewAll.php';
        if (DEBUG)
            echo("ControllerFamille : familleReadAll : vue = $vue");
        require($vue);
    }

    // Affiche le formulaire de creation d'une famille
    public static function familleCreate()
    {
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInsert.php';
        require($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'une nouvelle famille.
    public static function familleCreated()
    {
        // On met en place une validation des infos
        $validation = 0;
        if ($_GET['nom'] == '') {
            $validation = 1;
        } else {
            $results = ModelFamille::insert(htmlspecialchars($_GET['nom']));
        }
        $_SESSION['titre_jumbotron'] = $_GET['nom'];
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInserted.php';
        require($vue);
    }

    // Formulaire sélection d'un nom qui existe
    public static function familleReadNom()
    {
        $results = ModelFamille::getAllNom();

        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewNom.php';
        require($vue);
    }

    // Affiche une famille particulière (en fct nom)
    public static function familleReadOne()
    {
        $famille_nom = $_GET['nom'];
        $results = ModelFamille::getOne($famille_nom);
        $_SESSION['titre_jumbotron'] = $_GET['nom'];
        $_SESSION['famille_id'] = $results[0]->getId();

        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewSelected.php';
        require($vue);
    }


} ?>
<!--   fin Controller -->