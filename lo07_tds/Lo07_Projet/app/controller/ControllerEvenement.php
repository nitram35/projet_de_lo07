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
}