<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Interface d'administration | Mlle GermN</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Accueil</a></li>
					<li><a href="#work">Ajout de vidéos</a></li>
					<li><a href="#portfolio">Ajout de concerts</a></li>
					<li><a href="index.php">Retour au site</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="image fit"><img src="style/groupe2.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1>Administration <strong>Mlle GermN</strong>.</h1>
							</header>
							<p>Cette interface permet l'ajout de nouvelles vidéos et de dates de concert </p>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work" class="container 75%">
					<header>
						<h2>Ajouter de nouvelles vidéos</h2>
						<p>Remplir obligatoirement tous les champs</p>
					</header>
				
					<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="titre" id="titre" placeholder="Nom de la vidéo" />
											</div>
											
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="lien" id="lien" placeholder="Lien de la vidéo" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="description" id="description" placeholder="Description de la vidéo"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Mettre en ligne" /></li>
													<li><input type="reset" value="Effacer le formulaire" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio" class="container 75%">
					<header>
						<h2>Ajouter de nouvelles dates de concert</h2>
						<p>Remplir obligatoirement tous les champs</p>
					</header>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="lieu" id="lieu" placeholder="Lieu du concert" />
											</div>
											<div class="6u">
											Date prévue du concert :    <input type="date" name="dateC" id="dateC" placeholder="Date prévue de la représentation" />
											</div>
										</div>
										
										<div class="row">
											<div class="12u">
												<textarea name="descriptionC" id="descriptionC" placeholder="Description du concert, du lieu..."></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Ajouter" /></li>
													<li><input type="reset" value="Effacer le formulaire" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				
				
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				
			</div>

	</body>
</html>