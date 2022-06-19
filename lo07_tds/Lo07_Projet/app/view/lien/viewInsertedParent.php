
<!--   début viewInsertedParent -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.php';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($parent!=-1) {
     echo ("<h4>Le lien parent/enfant a été ajouté</h4>");
     echo("<ul>");
     echo ("<li>id_".$parent." = ".$_GET['id_parent']. "</li>");
     echo ("<li>id_enfant = " . $_GET['id_enfant'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h4>Problème dans l'ajout d'un lien du lien</h4>");
     echo("<p>Saisissez des infos valides!</p>");
        echo("<ul>");
     echo ("<li>id_parent = ".$_GET['id_parent']. "</li>");
     echo ("<li>id_enfant = " . $_GET['id_enfant'] . "</li>");
        echo("</ul>");
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!--   fin viewInsertedParent -->


