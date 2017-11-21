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
        $_SESSION["estConnecte"] = true;
        header("Location: index.php?uc=accueil");
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