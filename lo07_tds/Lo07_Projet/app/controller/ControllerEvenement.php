<?php
require_once '../model/ModelEvenement.php';

class ControllerEvenement {

    // --- Liste des evenements
    public static function evenementReadAll() {
        $results = ModelEvenement::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/evenement/viewAll.php';
        if (DEBUG)
            echo ("ControllerEvenement : evenementReadAll : vue = $vue");
        require ($vue);
    }
}