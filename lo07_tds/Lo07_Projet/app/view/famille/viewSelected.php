<!-- ----- début viewAll -->
<?php
session_start();
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.php';
    ?>

    <?php
    if ($results == -1) {              // Si il y a qqchose dans DEBUG donc erreur
        echo ("<h2>Problème de sélection d'une famille </h2>");
    }
    else{
        echo ("<h2>La famille $famille_nom a été sélectionné </h2>");
        $_SESSION['famille']= $famille_nom;
    }

    ?>

</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewAll -->

