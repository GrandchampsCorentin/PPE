<!-- La classe row indique l'existance d'une ligne de 12 colonnes dans le container parent -->
<!-- La classe h-50 équivaut au height: 50% en CSS -->
<!-- La classe w-100 équivaut au weight: 100% en CSS -->
<div class="row h-50 w-100" id="entete">
    <?php
        session_start();
        include("Composants/top.php"); 
        include("Composants/header.php"); 
        include("Composants/sidebar.php");
        include("Composants/logo.php");
    ?>
</div>

<div class="row">
    <?php 
        include("Composants/titre.php");
    ?>
</div>