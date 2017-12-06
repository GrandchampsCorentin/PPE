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
    case 'ajoutAdherent' :
    {
        $idLicence = $_POST["numeroLicence"];
        
        $mail = $_SESSION["demandeur"][0];
        
        $result = $pdo->ajoutAdherent($idLicence, $mail);
        if($result)
        {
            echo '<div class="row"><div class="offset-1 col-10 alert alert-warning">Liaison réussie !</div></div>';
            include("vues/adherent.php");  
        }
        else
        {

            echo '<div class="row"><div class="offset-1 col-10 alert alert-warning">Erreur dans le numéro de Licence !</div></div>';
 
            include("vues/ajoutAdherent.php");  
        }

    }
    
}
echo '<div/>';

?>