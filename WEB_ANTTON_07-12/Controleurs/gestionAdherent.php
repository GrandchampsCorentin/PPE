<?php 

$action = $_REQUEST['action'];
switch($action)
{
    case 'afficherAdherent' :
    {
        $demandeur = $_SESSION['demandeur'];
        $result = $pdo->getLienAdherents($demandeur[0]);
        var_dump($result);
        if($result != null)
            include("vues/adherent.php");
        else
            include("vues/ajoutAdherent.php");
        break;
    }
}