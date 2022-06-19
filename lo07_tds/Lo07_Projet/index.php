<?php

session_start();
$_SESSION['titre_jumbotron']="Aucune famille sélectionnée";
$_SESSION['famille_id']=NULL;
header('Location: app/router/router.php?action=truc');


?>
