<?php
ob_start();
	require("connexionBDD.php");
	
	// On récupère les données saisies dans le formulaire
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	// On récupère dans la base de données le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "INSERT INTO `germn`.`message` (`id`, `nom`, `email`, `sujet`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message');";
	$result = $connexion->exec($sql) or die ('Erreur dans la requête SQL' . $sql);

	header("location:interface.php");
		
	
	//on libère le jeu d'enregistrement
	$resultat ->closeCursor();
	// on ferme la connexion au SGBD
	$conexion = null;
	