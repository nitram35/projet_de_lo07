<!--   debut ControllerLien -->
<?php
require_once '../model/ModelLien.php';
require_once '../model/ModelIndividu.php';

class ControllerLien {
    
    // --- Liste des liens
    public static function lienReadAll() {
        $results = ModelLien::getAll();
        
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/lien/viewAll.php';
        if (DEBUG)
            echo ("ControllerLien : lienReadAll : vue = $vue");
        require ($vue);
    }
    
    // Ajout d'un lien parent/enfant
    public static function lienParentCreate() {
        //on récup indiv
        $results = ModelIndividu::getAll();
        //   Construction chemin de la vue d'ajout de lien Parent
        include 'config.php';
        $vue = $root . '/app/view/lien/viewInsertParent.php';
        require ($vue);
    }
    
    public static function lienParentCreated() {      
            $parent = ModelLien::insertParent(htmlspecialchars($_GET['id_enfant']),htmlspecialchars($_GET['id_parent']));
           
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/lien/viewInsertedParent.php';
        require ($vue);
 }
    // Ajout d'un lien union entre 2 indiv
    public static function lienUnionCreate() {
           //récupération des individus
           $results = ModelIndividu::getAll();
        //   Construction chemin de la vue d'ajout de lien Union
           include 'config.php';
           $vue = $root . '/app/view/lien/viewInsertUnion.php';
           require ($vue);
       }
       
    public static function lienUnionCreated() {
            $results = ModelLien::insertUnion(htmlspecialchars($_GET['id_homme']),htmlspecialchars($_GET['id_femme']),htmlspecialchars($_GET['type']),htmlspecialchars($_GET['date']),htmlspecialchars($_GET['lieu']));
           
        //   Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/lien/viewInsertedUnion.php';
        require ($vue);
 }
 
  
       
       
}?>
<!--   fin Controller -->