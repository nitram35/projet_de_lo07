<!--   début viewAll -->
<?php

require($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.php';
    ?>

    <h2>Liste des évènements - Famille <?PHP echo($_SESSION['titre_jumbotron']) ?></h2>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">famille_id</th>
            <th scope="col">id</th>
            <th scope="col">idd</th>
            <th scope="col">event_type</th>
            <th scope="col">event_date</th>
            <th scope="col">event_lieu</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // La liste des évènements est dans $results
        foreach ($results as $element) {
            printf("<tr><td>%d</td><td>%d</td><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                $element->getFamille_id(), $element->getId(), $element->getIid(), $element->getEventType(), $element->getEventDate(), $element->getEvent_lieu());
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!--   fin viewAll -->