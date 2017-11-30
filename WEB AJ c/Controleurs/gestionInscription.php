<?php 

$action = $_REQUEST['action'];
switch($action)
{
    case 'afficherInscription' :
    {
        include("vues/inscription.php");
        break;
    }
	case 'inscription' :
	{
        //Mieux gérer les mots de passe !
        $inscription = array ($_POST["emailDemandeur"],$_POST["nomDemandeur"],$_POST["prenomDemandeur"],$_POST["adresseDemandeur"],$_POST["cpDemandeur"],$_POST["villeDemandeur"],$_POST["motDePasseDemandeur"],$_POST["motDePasseDemandeur2"],$_POST["demETadh"]);
        $result = $pdo->inscriptionDemandeur($inscription);
        $_SESSION['demandeur'] = $inscription;
        if($result)
        {
            $_SESSION['message'] = "Inscription réussie";
            $_SESSION["estConnecte"] = true;
            header("Location: index.php?uc=adherent&action=afficherAdherent&typeC=adherent");
            
        }
        else
        {
            $_SESSION['message'] = "Echec de l'inscription";   
            header("Location: index.php?uc=inscription&action=afficherInscription&typeC=form");
        }
        
    }
}
?>