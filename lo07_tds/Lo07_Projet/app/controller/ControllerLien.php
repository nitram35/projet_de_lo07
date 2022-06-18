<?php

class ControllerLien
{
    // --- Liste des evenements
    public static function lienReadAll() {

        session_start();
        $famille = $_SESSION['famille'];
        $famille_id = ModelFamille::getOneId($famille);
        foreach ($famille_id as $element) {
            $famille_id = $element->getId();
        }
        $results = ModelLien::getAll($famille_id);
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/lien/viewAll.php';
        if (DEBUG)
            echo ("ControllerLien : lienReadAll : vue = $vue");
        require ($vue);
    }
}