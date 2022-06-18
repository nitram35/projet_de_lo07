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
    <h2>Liste des individus</h2>
    <table class = "table table-striped table-bordered">
        <thead>
        <tr>

            <th scope = "col">Famille id</th>
            <th scope = "col">id</th>
            <th scope = "col">nom</th>
            <th scope = "col">prenom</th>
            <th scope = "col">sexe</th>
            <th scope = "col">pere</th>
            <th scope = "col">mere</th>

        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($results as $element) {
            printf("<tr><td>%d</td><td>%d</td>%s<td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $element->getFamilleId(), $element->getId(),
                $element->getNom(), $element->getPrenom(), $element->getSexe(), $element->getPere(), $element->getMere() );
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewAll -->
