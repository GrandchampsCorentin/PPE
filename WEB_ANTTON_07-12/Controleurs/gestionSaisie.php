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
		$Repas = $_POST["Repas"];
		$result = $pdo->saisieFrais ($Date, $Motif, $Trajet, $Km, $Peage, $Repas, $Hebergement);
		$_SESSION["message"] = "Ajout des lignes de frais effectué avec succés";
		header("location:index.php?uc=gestionSaisie&action=saisie");

		break;
		
	}

}
?>