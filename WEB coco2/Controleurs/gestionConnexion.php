<?php 

$action = $_REQUEST['action'];
switch($action)
{
    case 'afficheConnexion' :
    {
        include("vues/connexion.php");
        break;
    }
	case 'connexion' :
	{
        //RAJOUTER FONCTION PDO QUI VERIFIE L EXACTITUDE DES SAISIES
        $mail = $_POST['mail'];
        $motPasse = $_POST['motPasse'];  
  
        $result = $pdo->connexion($mail,$motPasse);   
        $demandeur = array ($mail, $result[0]);
		if (isset($result[0]) && $result[0] != null && $mail != null && $motPasse != null)
		{
            $_SESSION["estConnecte"] = true;
            $_SESSION["demandeur"] = $demandeur;
            header("Location: index.php?uc=accueil");
        }
        else
        {
            header("Location: index.php?uc=connexion&action=afficheConnexion&typeC=form");
        }
        break;
    }
    case 'deconnexion' :
    {
        $_SESSION["estConnecte"] = false;
        header("Location: index.php?uc=accueil");
        break;
    }
}
?>