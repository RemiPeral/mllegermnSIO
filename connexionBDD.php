<?php
	// Définitions de constantes pour la connexion à MySQL
	$hote= "localhost";
	$login= "root";
	$password="";
	$nombd="germn";

	// Connection au serveur
	try {
			$connexion = new PDO("mysql:host=$hote;dbname=$nombd",$login, $password);
			//Modification du jeu de caractères de la connexion
			$req="SET NAMES utf8";
			$connexion->query($req) ;
	} catch ( Exception $e ) {
		  die("\nConnexion à '$hote' impossible:".$e->getMessage());
	}

?>