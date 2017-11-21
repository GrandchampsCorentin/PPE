<?php
/**
Classe d'accès aux données.

*/
class PdoFredi
{
	private static $pdo;
	private static $pdoFredi = null;
	
	/**
	Constructeur qui crée l'instance du Pdo utilise dans toutes les méthodes de la classe
	*/
	private function __construct()
	{
		PdoFredi::$pdo = new PDO('mysql:host=172.15.205.1:81;dbname=fredi','root','root');
		PdoFredi::$pdo->query("SET CHARACTER SET utf8");
	}
	public function __destruct()
	{
		PdoFredi::$pdo = null;
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
		$res = PdoFredi::$pdo -> query($req);
		$lesLignes = $res -> fetchAll();
		return $leslignes;
	}
	
}

?>