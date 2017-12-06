<?php 
session_start();
$adherent = $_SESSION["adherents"];
$tabIndice = $_REQUEST['adh'];?>


<h2 class="card-header text-center">Profil de l'adhérent(e) <?php echo $adherent[$tabIndice][3]?></h2>


<h4 class="mt-3"><u>Informations relatives au sport</u></h4>

<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th scope="col">N°Licence</th>
            <th scope="col">Club</th>
            
        </tr>
    </thead>
    <tr>
        
        <td scope="row"><?php echo $adherent[$tabIndice][0];?></td>
        <td><?php echo $adherent[$tabIndice][1];?></td>
    </tr>
</table>


<h4 class="mt-3"><u>Informations personnelles</u></h4>
<table class="table table-bordered">
    
    <thead class="thead-light">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Sexe</th>
            <th scope="col">Date de naissance</th>
        </tr>
    </thead>
    <tr>
        <td scope="row"><?php echo $adherent[$tabIndice][2];?></td>
        <td><?php echo $adherent[$tabIndice][3];?></td>
        <td><?php echo $adherent[$tabIndice][4];?></td>
        <td><?php echo $adherent[$tabIndice][5];?></td>
    </tr>
</table>

<h4 class="mt-3"><u>Lieu de résidence</u></h4>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
        </tr>
    </thead>
    <tr>
        <td scope="row"><?php echo $adherent[$tabIndice][6];?></td>
        <td><?php echo $adherent[$tabIndice][7];?></td>
        <td><?php echo $adherent[$tabIndice][8];?></td>
    </tr>
</table>