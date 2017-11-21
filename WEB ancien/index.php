<?php

include("StructureHTML/top.php"); 

include("StructureHTML/header.php"); 

if(!isset($_REQUEST['uc']))
$uc = 'connexion';
else
$uc = $_REQUEST['uc'];


switch($uc)
{
case 'connexion':
    {include("vues/connexion.php");break;}
case 'inscription' :
    {include("vues/inscription.php");break;}
case 'accueil' :
    {echo "Vous êtes connecté";break;}
case 'saisie':
	{include("vues/saisieFrais.php");break;}
}


include("StructureHTML/footer.php");

include("StructureHTML/bottom.php");

?>