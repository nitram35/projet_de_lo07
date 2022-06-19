
<!--   début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentMenu.html';
      include $root . '/app/view/fragment/fragmentJumbotron.php';
      ?>
      
      <h2>Les liens de la famille <?PHP echo($_SESSION['titre_jumbotron']) ?></h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">famille_id</th>
          <th scope = "col">id</th>
          <th scope = "col">iid1</th>
          <th scope = "col">iid2</th>
          <th scope = "col">lien_type</th>
          <th scope = "col">lien_date</th>
          <th scope = "col">lien_lieu</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des évènements est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%d</td><td>%d</td><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $element->getFamille_id(), 
             $element->getId(),$element->getIid1(),$element->getIid2(),$element->getLienType(),$element->getLienDate(),$element->getLienLieu());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!--   fin viewAll -->