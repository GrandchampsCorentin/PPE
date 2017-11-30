<?php 

$demandeur = $_SESSION['demandeur'];
$result = $pdo->getLienAdherents($demandeur[0]);
include("StructureHTML/Composants/menuAdherent.php");
echo '<div class="card card offset-1 col-7 bg-light pt-2 pb-3 decalageVerticalArticles align-self-start">';

$action = $_REQUEST['action'];
switch($action)
{
    case 'afficherAdherent' :
    {

        if($result != null) 
            include("vues/adherent.php");  
        else
            include("vues/ajoutAdherent.php");
        break;
    }
    case 'afficherAjoutAdherent' :
    {
        include("vues/ajoutAdherent.php");  
        break;     
    }
    
}
echo '<div/>';