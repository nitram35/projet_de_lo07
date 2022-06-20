<!--   début viewInserted -->
<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.php';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
        echo("<h4>L'individu a été ajouté à la famille</h4>");
        echo("<ul>");
        echo("<li>famille_id = " . $_SESSION['famille_id'] . "</li>");
        echo("<li>id = " . $results . "</li>");
        echo("<li>nom = " . $_GET['nom'] . "</li>");
        echo("<li>prenom = " . $_GET['prenom'] . "</li>");
        echo("<li>sexe = " . $_GET['sexe'] . "</li>");
        echo("<li>pere = 0</li>");
        echo("<li>mere = 0</li>");
        echo("</ul>");
    } else {
        echo("<h4>Problème d'ajout de l'individu</h4>");
        echo("Saisissez des infos valides!");
        echo("<ul>");
        echo("<li>Nom = " . $_GET['nom'] . "</li>");
        echo("<li>Prenom = " . $_GET['prenom'] . "</li>");
        echo("<li>Sexe = " . $_GET['sexe'] . "</li>");
        echo("</ul>");
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!--   fin viewInserted -->


