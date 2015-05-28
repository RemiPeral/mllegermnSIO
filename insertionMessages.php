<?php
ob_start();
	require("connexionBDD.php");
	
	// On récupère les données saisies dans le formulaire
	$titre = $_POST['titre'];
	$lien = $_POST['lien'];
	$description = $_POST['description'];
	
	// On récupère dans la base de données le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "INSERT INTO `germn`.`message` (`id`, `titre`, `lien`, `description`) VALUES (NULL, '$titre', '$lien', '$description');";
	$result = $connexion->exec($sql) or die ('Erreur dans la requête SQL' . $sql);

	header("location:interface.php");
		
	
	//on libère le jeu d'enregistrement
	$resultat ->closeCursor();
	// on ferme la connexion au SGBD
	$conexion = null;
	