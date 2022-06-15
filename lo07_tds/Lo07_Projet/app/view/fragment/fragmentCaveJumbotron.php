<!-- ----- debut fragmentCaveJumbotron -->

<div class="jumbotron">
    <h1> <?php
        if (isset($_SESSION["famille"])) {
            echo $_SESSION["famille"];
        }
        else {
            echo "Aucune famille selectionee";
        }
        ?> </h1>

</div>
<p/>
<!-- ----- fin fragmentCaveJumbotron -->
