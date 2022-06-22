<!--   début viewInsertedUnion-->
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
    if ($results!=-1) {
        echo("<h4>Le lien d'union a été ajouté</h4>");
        echo("<ul>");
        echo("<li>famille_id = " . $_SESSION['famille_id'] . "</li>");
        echo("<li>homme_id = " . $_GET['id_homme'] . "</li>");
        echo("<li>homme_id = " . $_GET['id_femme'] . "</li>");
        echo("<li>lien_type = " . $_GET['type'] . "</li>");
        echo("<li>lien_date = " . $_GET['date'] . "</li>");
        echo("<li>lien_lieu = " . $_GET['lieu'] . "</li>");
        echo("</ul>");
    } else {
        echo("<h4>Problème dans l'ajout d'un lien d'union</h4>");
        echo("<p>Saisissez des infos valides!</p>");
        echo("<ul>");
        echo("id = " . $id);
        echo("</ul>");
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!--   fin viewInsertedUnion -->


