<?php
ob_start();
	require("connexionBDD.php");
	
	// On récupère les données saisies dans le formulaire
	$titre = $_POST['titre'];
	$lien = $_POST['lien'];
	$description = $_POST['description'];
	
	// On récupère dans la base de données le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "INSERT INTO `germn`.`concert` (`id`, `date`, `lieu`, `description`) VALUES (NULL, '$date', '$lieu', '$description');";
	$result = $connexion->exec($sql) or die ('Erreur dans la requête SQL');

	header("location:interface.php");
		
	
	//on libère le jeu d'enregistrement
	$resultat ->closeCursor();
	// on ferme la connexion au SGBD
	$conexion = null;
	
	?>