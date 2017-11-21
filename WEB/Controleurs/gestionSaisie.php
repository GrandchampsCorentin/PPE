<?php
$action = $_REQUEST['action'];

switch($action)
{
	case 'saisie':
	{
		$Date = $_POST["Date"];
        $Motif = $_POST["Motif"];
        $Trajet = $_POST["Trajet"];
		$Km = $_POST["Km"];
		$Peage = $_POST["Peage"];
		$Hebergement = $_POST["Hebergement"];
		echo " salut " ;
		$pdo = saisieFrais ($Date, $Motif, $Trajet, $Km, $Peage, $Hebergement);
		$message = "Saisie effectué !";
		include("vues/v_message.php");
		break;
		
	}

}
?>