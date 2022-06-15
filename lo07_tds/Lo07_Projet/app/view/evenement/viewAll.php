
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

    <table class = "table table-striped table-bordered">
        <thead>
        <tr>
            <th scope = "col">famille_id</th>
            <th scope = "col">id</th>
            <th scope = "col">iid</th>
            <th scope = "col">event_type</th>
            <th scope = "col">event_date</th>
            <th scope = "col">event_lieu</th>

        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($results as $element) {
            printf("<tr><td>%d</td><td>%d</td><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $element->getIFamilleId(),
                $element->getId(), $element->getIid(), $element->getEventType(), $element->getEventDate(), $element->getEventLieu();
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewAll -->



