<!--   debut ControllerAccueil -->
<?php

class ControllerAccueil
{
    // --- page d'acceuil
    public static function Accueil()
    {
        $titre_jumbotron="Aucune famille sélectionnée";
        include 'config.php';
        $vue = $root . '/app/view/viewAccueil.php';
        if (DEBUG)
            echo("ControllerAccueil : Accueil : vue = $vue");
        require($vue);
    }


}

?>
<!--   fin ControllerAccuezil -->
