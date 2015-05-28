<!DOCTYPE HTML>
<?php require("connexionBDD.php"); ?>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>Mlle GermN</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" />
<link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css" />
<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/retina.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="style/js/mediaelement.min.js"></script>
<script type="text/javascript" src="style/js/mediaelementplayer.min.js"></script>
<script type="text/javascript" src="style/js/jquery.dcflickr.1.0.js"></script>
<script type="text/javascript" src="style/js/twitter.min.js"></script>
<script type="text/javascript">

$.backstretch("style/images/bg/1.jpg");

</script>
</head>
<body>
<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
	<div class="header">
		<!-- Begin Logo -->
		<div class="logo">
		    <a href="index.php">
				Mlle Germn 
			</a>
	    </div>
		<!-- End Logo -->
		<!-- Begin Menu -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
					<li class="active"><a href="index.php">Accueil</a>
					</li>
					<li><a href="musique.php">Musique</a>
						<ul>
							<li><a href="musique.php">Quelques extraits</a></li>
							<li><a href="concerts.php">Prochains concerts</a></li>
						</ul>
					</li>
					<li><a href="bio.php">Bio</a></li>
					<li><a href="videos.php">Vidéos</a></li>
					<li><a href="galerie.html">Galerie</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="administration.php">Administration</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<!-- End Menu -->
	</div>
</div>
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper"><!-- Begin Intro -->
<div class="intro">Bienvenue sur le site internet de la troupe Mlle GermN</div>
<ul class="social">
<li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li>
</ul>
<!-- Begin Blog Grid -->
<div class="blog-wrap">
	<!-- Begin Blog -->
	<div class="blog-grid">
		<!-- Begin Image Format -->
		<div class="post format-image box"> 
			<div class="frame">
				<a href="galerie.html">
					<img src="style/images/germn/jeanne-v5.jpg" alt="" />
				</a>
			</div>
			<h2 class="title"><a href="post.html">Mlle Germn</a></h2>
			<p>Du vivant de Jacques Brel, beaucoup de critiques affirmaient que ses chansons étaient de véritables petites saynètes. De cette assertion est né le projet de Mlle GermN : proposer un Brel non seulement chanté mais aussi joué en empruntant à divers arts de la scène avec une voix de femme, avec des musiques revisitées.</p>
			<p>Le projet enfin concrétisé, se traduit par une mise en scène vivante et drôle qui illustre les morceaux. Le concert devient ainsi un spectacle à part entière. Et les chansons intemporelles de Jacques Brel connaissent une nouvelle lumière. D’autant que Laurent, le batteur démonstratif, et Patrick, l’accordéoniste talentueux, excellent dans l’art du burlesque alors que pour Jeane, la scène est le réceptacle naturel à son énergie débordante…tout simplement!</p>
			<p>Les rires (beaucoup) et les larmes (un peu) alternent, tant la mise en scène exacerbe les sentiments. Car pour être insolite, ce Brel porté par une voix féminine, sur une musique jubilatoire conserve néanmoins intacte l’émotion inhérente à ses textes d’écorché vif.</p>
       
			<div class="details">
				<span class="icon-image"><a href="#">21 Avril 2015</a></span>
			</div>
		</div>
		<!-- End Image Format -->

 	
		<!-- Begin Quote Format -->
		<!--<div class="post format-quote box"> 
			<blockquote>Scissors cuts paper, paper covers rock, rock crushes lizard, lizard poisons Spock, Spock smashes scissors, scissors decapitates lizard, lizard eats paper, paper disproves Spock, Spock vaporizes rock, and as it always has, rock crushes scissors.<cite>Sheldon Cooper</cite></blockquote>	
			<div class="details">
				<span class="icon-quote"><a href="#">September 21, 2012</a></span>
				<span class="likes"><a href="#" class="likeThis">27</a></span>
				<span class="comments"><a href="#">4</a></span>
			</div>
	
		</div>--> 
		<!-- End Quote Format --> 	


		<!-- Begin Video Format -->
		<?php 
			$sql = "SELECT * from video ORDER BY id DESC LIMIT 1 ";
			$result = $connexion->query($sql) or die ('Erreur dans la requête '.$sql);
			
				$ligne = $result->fetch();
				$titre = $ligne['titre'];
				$lien = $ligne['lien'];
				$description = $ligne['description'];
		?>
		
		<div class="post format-video box"> 
			<div class="video frame"><iframe src="<?php echo "$lien"; ?>" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
			<h2 class="title"><a href="post.html"><?php echo "$titre"; ?></a></h2>
			<p><?php echo "$description"; ?></p>
		
			<div class="details">
				<span class="icon-video"><a href="#">21 Mars 2015</a></span>
			</div>
			
		</div>
		<!-- End Video Format --> 					


		<!-- Begin Audio Format -->
		<div class="post format-audio box"> 
			<div class="audio-wrapper">
				<div class="vinyl">
					<dl>
						<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/196517634&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					
					</dl>
				</div>
				<div class="clear"></div>
			</div>
			<div class="details">
				<span class="icon-audio"><a href="#">21 Mars 2015</a></span>
			</div>
	
		</div>
		<!-- End Audio Format --> 				
 	
 	</div>
	<!-- End Blog -->
</div>
<!-- End Blog Grid -->

</div>
<!-- End Wrapper -->


<!-- Begin Footer -->
<div class="footer-wrapper">
<div id="footer" class="four">
		<div id="first" class="widget-area">
			<div class="widget widget_search">
				
			</div>
			<div class="widget widget_archive">
				<h3 class="widget-title">Menu</h3>
				<ul>
					<li><a href="index.php">Index</a></li>
					<li><a href="musique.php">Musique</a></li>
					<li><a href="bio.php">Bios</a></li>
					<li><a href="videos.php">Vidéos</a></li>
					<li><a href="galerie.html">Galerie</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>	
		</div>
	
		<div id="third" class="widget-area">
		<div id="example-widget-3" class="widget example">
			<h3 class="widget-title">Galerie</h3>
			<ul class="post-list">
			  	<li> 
			  		<div class="frame">
			  			<a href="#"><img src="style/images/germn/jeane1Min.jpg" /></a>
			  		</div>
					<div class="meta">
					    <h6><a href="bio.php#jeane">Jeane</a></h6>
					    <em>21 Avril 2015</em>
				    </div>
				</li>
				<li> 
			  		<div class="frame">
			  			<a href="#"><img src="style/images/germn/patrick1Min.jpg" /></a>
			  		</div>
					<div class="meta">
					    <h6><a href="bio.php#patrick">Patrick</a></h6>
					    <em>21 Avril 2015</em>
				    </div>
				</li>
				<li> 
			  		<div class="frame">
			  			<a href="#"><img src="style/images/germn/laurent1Min.jpg" /></a>
			  		</div>
					<div class="meta">
					    <h6><a href="bio.php#laurent">Laurent</a></h6>
					    <em>21 Avril 2015</em>
				    </div>
				</li>
			</ul>
			
		</div>
		</div>
	</div>
</div>
<div class="site-generator-wrapper">
	<div class="site-generator">Copyright PERAL Rémi 2015. All rights reserved.</div>
</div>
<!-- End Footer --> 
<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>