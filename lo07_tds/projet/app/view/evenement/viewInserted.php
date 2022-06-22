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
    if ($results!=-1) {
        echo("<h4>Un nouvel évènement a été ajouté </h4>");
        echo("<ul>");
        echo("<li>famille_id = " . $_SESSION['famille_id'] . "</li>");
        echo("<li>individu_id = " . $_GET['id'] . "</li>");
        echo("<li>event_id = " . $results . "</li>");
        echo("<li>EventType = " . $_GET['type'] . "</li>");
        echo("<li>event_date = " . $_GET['date'] . "</li>");
        echo("<li>event_lieu = " . $_GET['lieu'] . "</li>");
        echo("</ul>");
    } else {
        echo("<h4>Problème dans l'ajout de l'évènement</h4>");
        echo("<ul>");
        echo("id = " . $_GET['nom']);
        echo("</ul>");
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!--   fin viewInserted -->


