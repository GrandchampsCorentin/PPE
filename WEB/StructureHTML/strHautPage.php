<!-- La classe row indique l'existance d'une ligne de 12 colonnes dans le container parent -->
<!-- La classe h-50 équivaut au height: 50% en CSS -->
<!-- La classe w-100 équivaut au weight: 100% en CSS -->
<div class="row " id="entete">
    <?php
        session_start();
        include("Composants/top.php"); 
        include("Composants/sidebar.php");
        include("Composants/logo.php");
        include("Composants/titre.php");
    ?>
</div>