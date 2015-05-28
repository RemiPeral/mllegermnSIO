<?php
	/*// Définitions de constantes pour la connexion à MySQL http://lmorel3.fr/2013/08/recuperer-lid-dune-video-dailymotion-youtube-ou-vimeo-via-son-lien-en-php/
	$hote= "sql2.olympe.in";
	$login= "0l62mwo7";
	$password="motdepassebddgermn";
	$nombd="0l62mwo7";

	// Connection au serveur
	try {
			$connexion = new PDO("mysql:host=$hote;dbname=$nombd",$login, $password);
			//Modification du jeu de caractères de la connexion
			$req="SET NAMES utf8";
			$connexion->query($req) ;
	} catch ( Exception $e ) {
		  die("\nConnexion à '$hote' impossible:".$e->getMessage());
	}*/
	
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



<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>