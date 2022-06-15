<?php
require_once '../model/ModelEvenement.php';

class ControllerEvenement {

    // --- Liste des evenements
    public static function evenementReadAll() {

        session_start();
        $famille = $_SESSION['famille'];
        $famille_id = ModelFamille::getOneId($famille);
        foreach ($famille_id as $element) {
            $famille_id = $element->getId();
        }
        $results = ModelEvenement::getAll($famille_id);
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/evenement/viewAll.php';
        if (DEBUG)
            echo ("ControllerEvenement : evenementReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche le formulaire de creation d'une famille
    public static function evenementCreate() {
        // liste des individus
        $resultsIndividu = ModelIndividu::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'une nouvelle famille.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function evenementCreated() {

        $results = ModelFamille::insert(htmlspecialchars($_GET['iid']));

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInserted.php';
        require ($vue);
    }
}