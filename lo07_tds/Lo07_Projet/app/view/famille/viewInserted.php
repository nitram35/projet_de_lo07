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
        echo("<h4>La nouvelle famille a été ajoutée à la BDD </h4>");
        echo("<ul>");
        echo("<li>id = " . $results . "</li>");
        echo("<li>nom = " . $_GET['nom'] . "</li>");
        echo("</ul>");
    } else {
        echo("<h4>Problème dans l'ajout de la famille à la BDD</h4>");
        echo("Saisissez un nom valide, qui n'est pas déjà existant dans la BDD");
        echo("id = " . $_GET['nom']);
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!--   fin viewInserted -->


