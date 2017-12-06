<?php

    $i=0;
    foreach($result as $ligne)
    { 

        $tabIdAdherents[$i]=$pdo->getInfosAdherent($ligne[0]);
        $i++;
    }
    
 
            $_SESSION["adherents"]=$tabIdAdherents;
?>


<div class="card offset-1 col-2 bg-light pt-2 pb-3 decalageVerticalArticles mb-auto">
    <h5 class="text-center">Mes adhérents</h5>
   
    <?php   if(isset($tabIdAdherents[0][0])) {?>
        <select class="custom-select" onchange="showAdherent(this.value)">
                <option value=''>Sélectionnez un adhérent</option>

                <option value='0'><?php echo $tabIdAdherents[0][3];?></option>

                <?php if(isset($tabIdAdherents[1][0])) 
                        echo "<option value='1'>".$tabIdAdherents[1][3]."</option>";?>
                <?php if(isset($tabIdAdherents[2][0]))
                        echo "<option value='2'>".$tabIdAdherents[2][3]."</option>";?>
                <?php if(isset($tabIdAdherents[3][0])) 
                        echo "<option value='3'>".$tabIdAdherents[3][3]."</option>";?>
                <?php if(isset($tabIdAdherents[4][0])) 
                        echo "<option value='4'>".$tabIdAdherents[4][3]."</option>";?>
                <?php  if(isset($tabIdAdherents[5][0]))
                        echo "<option value='5'>".$tabIdAdherents[5][3]."</option>";?>
                <?php if(isset($tabIdAdherents[6][0])) 
                        echo "<option value='6'>".$tabIdAdherents[6][3]."</option>";?>
        </select>
        <a class="btn btn-primary mt-2 mx-auto btn-block px-0" href="index.php?uc=adherent&action=afficherAjoutAdherent&typeC=adherent">Ajouter un adhérent</a>
    <?php }else{ ?>
        <p>Vous n'avez pas encore inscrit d'adhérents</p>
    <?php } ?>
</div>