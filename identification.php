<?php
ob_start();
	require("connexionBDD.php");
	
	// On récupère les données saisies dans le formulaire
	$id = $_POST['username'];
	$mdp = $_POST['password'];
	
	// On récupère dans la base de données le mot de passe qui correspond au nom saisi par le visiteur
	$sql = "SELECT identifiant, motdepasse FROM connexion WHERE identifiant ='$id'";
	$result = $connexion->query($sql) or die ('Erreur dans la requête SQL');
	$ligne = $result->fetch();
	$motPasseBdd = $ligne['motdepasse'];
	
	// On vérifie que le mot de passe saisi est identique à celui enregistré dans la base de données

	if  ($mdp != $motPasseBdd || $mdp == null)
	// Le mot de passe est différent de celui de la base utilisateur
	{

		// On inclut le formulaire d'identification
		session_start();
		$titre="connexion";
		include ("administration.php");
		echo "<div id='form_wrapper' class='form_wrapper'><a  class='forgot linkform'>Identifiant ou mot de passe incorrects</a></div>";
		ob_end_flush();

		// On quitte le script courant sans effectuer les éventuelles instructions qui suivent
		exit;
	}
	else
	// Le mot de passe saisi correspond à celui de la base utilisateur
	{
		//Démarrage d'une session
		
		session_start();
		
		//Création d'une variable session
		
		$_SESSION['ok']="oui";
		// Retour vers la page d'entrée du site
		
		header("location:interface.php");
		ob_end_flush();
		// On quitte le script courant sans effectuer les éventuelles  instructions qui suivent
		exit;
	}
	
	//on libère le jeu d'enregistrement
	$resultat ->closeCursor();
	// on ferme la connexion au SGBD
	$conexion = null;
	
	?>