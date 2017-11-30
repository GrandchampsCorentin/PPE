<?php

    $i=0;
    foreach($result as $ligne)
    { 
        $tabIdAdherents[$i]=$pdo->getInfosAdherent($ligne[0]);
        $i++;
    }

?>


<div class="card offset-1 col-2 bg-light pt-2 pb-3 decalageVerticalArticles mb-auto">
    <h5 class="text-center">Mes adhérents</h5>
    <?php   if(isset($tabIdAdherents[1][0][0])) {?>
        <select class="custom-select">
                <option value='01'><?php echo $tabIdAdherents[0][0][3];?></option>

                <?php if(isset($tabIdAdherents[1][0][0])) 
                        echo "<option value='02'>".$tabIdAdherents[1][0][3]."</option>";?>
                <?php if(isset($tabIdAdherents[2][0][0]))
                        echo "<option value='03'>".$tabIdAdherents[2][0][3]."</option>";?>
                <?php if(isset($tabIdAdherents[3][0][0])) 
                        echo "<option value='04'>".$tabIdAdherents[3][0][3]."</option>";?>
                <?php if(isset($tabIdAdherents[4][0][0])) 
                        echo "<option value='05'>".$tabIdAdherents[4][0][3]."</option>";?>
                <?php  if(isset($tabIdAdherents[5][0][0]))
                        echo "<option value='06'>".$tabIdAdherents[5][0][3]."</option>";?>
                <?php if(isset($tabIdAdherents[6][0][0])) 
                        echo "<option value='07'>".$tabIdAdherents[6][0][3]."</option>";?>
        </select>
        <a class="btn btn-primary mt-2 mx-auto btn-block px-0" href="index.php?uc=adherent&action=afficherAjoutAdherent&typeC=adherent">Ajouter un adhérent</a>
    <?php }else{ ?>
        <p>Vous n'avez pas encore inscrit d'adhérents</p>
    <?php } ?>
</div>