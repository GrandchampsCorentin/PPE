<!-- La classe row indique l'existance d'une ligne de 12 colonnes dans le container parent -->
<!-- La classe h-50 équivaut au height: 50% en CSS -->
<!-- La classe w-100 équivaut au weight: 100% en CSS -->
<div class="row" id="entete">
    <?php   
        
        include("Composants/top.php");
    ?>

    <span class="col-3">
        <div class="card mt-2 px-2 pt-2 menus">
            <?php   
                include("Composants/sidebar.php"); 
            ?>
        </div>
    </span>

    <span class="offset-4 col-5 mb-4">
        <?php   
            include("Composants/logo.php"); 
        ?>
    </span>

    <span class="card offset-2 col-8 bg-light" id="margeEntete">
        <?php   
            include("Composants/titre.php");
        ?>
    </span>
</div>