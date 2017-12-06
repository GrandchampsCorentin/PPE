<?php
/**
Classe d'accès aux données.

*/
class PdoFredi
{
	private static $monPdo;
	private static $pdoFredi = null;
	
	/**
	Constructeur qui crée l'instance du Pdo utilise dans toutes les méthodes de la classe
	*/
	private function __construct()
	{
		PdoFredi::$monPdo = new PDO('mysql:host=localhost;dbname=fredi','root', '');
		PdoFredi::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct()
	{
		PdoFredi::$monPdo = null;
	}
	
	public static function getPdoFredi()
	{
		if(PdoFredi::$pdoFredi == null)
		{
			PdoFredi::$pdoFredi = new PdoFredi();
		}
		return PdoFredi::$pdoFredi;
	}
	
	public function getFrais()
	{
		$req ="Select * from lignefrais, demandeurs, motifs where demandeurs.mail = lignefrais.mail and lignefrais.idmotif = motifs.idmotif;";
		$res = PdoFredi::$monPdo -> query($req);
		$lesLignes = $res -> fetchAll();
		return $leslignes;
	}

	public function connexion($mail, $motPasse)
	{
				
		$reqSQL="SELECT nom FROM demandeurs WHERE mail='$mail' AND mdp='$motPasse';";    
		
		$liste= PdoFredi::$monPdo->query($reqSQL);
		$result = $liste->fetch();		   
		return $result;
	}
	
	public function inscriptionDemandeur($formDemandeur)
	{
		$retour = false;
		//Mieux gérer les mots de passes !
		if($formDemandeur[6] == $formDemandeur[7])
		{
			$reqSQL='INSERT INTO demandeurs VALUES (';
			$reqSQL= $reqSQL."'".$formDemandeur[0]."','".$formDemandeur[1]."','".$formDemandeur[2]."','".$formDemandeur[3]."','".$formDemandeur[4]."','".$formDemandeur[5]."','".$formDemandeur[6]."','00');";
			$test = PdoFredi::$monPdo->exec($reqSQL);
			if($test)
				$retour = true;

		}
		return $retour;
	}

	public function getLienAdherents($mail)
	{
		$reqSQL = "SELECT distinct numerolicence, mail FROM appartient WHERE mail='$mail';";
		$liste = PdoFredi::$monPdo->query($reqSQL);
		$result = $liste->fetchAll();

		return $result;
	}

	public function getInfosAdherent($numerolicence)
	{
		$reqSQL = "SELECT * FROM adherents WHERE numerolicence='$numerolicence';";
		$liste = PdoFredi::$monPdo->query($reqSQL);
		$result = $liste->fetch();

		return $result;
	}

	public function ajoutAdherent($numeroLicence, $mail)
	{
		$retour = false;
		$reqSQL ='INSERT INTO appartient VALUES ("'.$numeroLicence.'","'.$mail.'");';
		$test = PdoFredi::$monPdo->exec($reqSQL);
		if($test)
			$retour = true;

		return $retour;
	}

}

?>