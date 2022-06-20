
<!--   début viewInserted -->
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
    //On affiche le nom et prénom de l'ind
    echo ("<h1 style='color:darkmagenta'>".$results['individu']['nom']." ".$results['individu']['prenom']."</h1>");
    //On affiche les évènements
    echo ("<h2>Evènements</h2>");
    echo ("<ul>");
    echo ("<li>Né le ");
    echo ($results['evenement']['NAISSANCE']['event_date']);
    echo (' à ');
    echo ($results['evenement']['NAISSANCE']['event_lieu']."</li>");
    echo ("<li>Décédé le ");
    echo ($results['evenement']['DECES']['event_date']);
    echo (' à ');
    echo ($results['evenement']['DECES']['event_lieu']."</li></ul>");
    //Parents de l'individu
    echo ("<h2>Parents</h2>");
    echo ("<ul>");
    if ($results['individu']['mere']==0)
        echo ("<li>Mère Inconnue</li>");
    else
        echo ("<li>Mère <a href='router.php?action=individuPage&id=".$results['individu']['mere']."'>".$results['individu']['mere_nom']." ".$results['individu']['mere_prenom']."</a></li>");

    if ($results['individu']['pere']==0)
        echo ("<li>Père Inconnu</li>");
    else
        echo ("<li>Père <a href='router.php?action=individuPage&id=".$results['individu']['pere']."'>".$results['individu']['pere_nom']." ".$results['individu']['pere_prenom']."</a></li>");
    echo ("</ul>");

    //Liens d'unions
    echo ("<h2>Unions et enfants</h2>");
    echo ("<ul>");
    foreach ($results['union'] as $element){
        echo ("<li>Union avec <a href='router.php?action=individuPage&id=".$element['id']."'>".$element['nom']." ".$element['prenom']."</a></li>");
        echo ("<ol>");
        foreach ($element['enfants'] as $enfant){
            echo ("<li>Enfant <a href='router.php?action=individuPage&id=".$enfant['id']."'>".$enfant['nom']." ".$enfant['prenom']."</a></li>");
        }
        echo ("</ol>");
    }
    echo ("</ul>");
    


    ?>
  </div
      <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
    <!--   fin viewInserted -->


