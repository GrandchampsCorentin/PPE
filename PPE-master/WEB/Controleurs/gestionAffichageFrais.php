<?php
$action = $_REQUEST['action'];

switch($action)
{
	case 'afficherFrais':
	{
		$frais = $pdo -> getFrais();
		include("vues/affichageFrais.php");
		break;
		
	}

}
?>