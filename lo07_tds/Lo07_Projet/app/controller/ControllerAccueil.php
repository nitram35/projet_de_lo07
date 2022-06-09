<!-- ----- debut ControllerAccueil -->
<?php

class ControllerAccueil{
    // --- page d'acceuil
    public static function caveAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewCaveAccueil.php';
        if (DEBUG)
            echo ("ControllerFamille : caveAccueil : vue = $vue");
        require ($vue);
    }






}
?>
<!-- ----- fin ControllerVin -->
