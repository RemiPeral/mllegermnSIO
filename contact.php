<!DOCTYPE HTML>
<?php require("connexionBDD.php"); ?>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>Obscura</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" />
<link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css" />
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
					<li><a href="index.php">Accueil</a>
					<li><a href="musique.php">Musique</a>
						<ul>
							<li><a href="musique.php">Quelques extraits</a></li>
							<li><a href="concerts.php">Prochains concerts</a></li>
						</ul>
					</li>
					<li><a href="bio.php">Bio</a></li>
					<li><a href="videos.php">Vidéos</a></li>
					<li><a href="galerie.html">Galerie</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
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
<div class="intro">Pour nous contacter </div>
<ul class="social">
<li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li>
</ul>
<!-- Begin Container -->
<div class="content box">
	<h1 class="title">Mlle Germn | Contact</h1>
		<div class="map"><iframe width="630" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?ll=37.978515,23.754019&amp;spn=0.002537,0.006748&amp;vpsrc=6&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
<h3>Remplissez le formulaire pour nous contacter </h3>

<div class="form-container">
	<form class="forms" action="#" method="post">
		<fieldset>
			<ol>
				<li class="form-row text-input-row"><label>Nom</label><input type="text" name="name" value="" class="text-input required" title="" /></li> 
				<li class="form-row text-input-row"><label>E-mail</label><input type="text" name="email" value="" class="text-input required email" title="" /></li> 
				<li class="form-row text-input-row"><label>Sujet</label><input type="text" name="subject" value="" class="text-input required" title="" /></li> 
				<li class="form-row text-area-row"><label>Message</label><textarea name="message" class="text-area required"></textarea></li> 
				<li class="button-row"><input type="submit" value="Submit" name="submit" class="btn-submit" /></li>
			</ol>
		</fieldset>
	</form>
</div>



</div>
<!-- End Container -->

<!-- Begin Sidebar -->
<div class="sidebar box">
  <div class="sidebox widget">
			<h3 class="widget-title">Où sommes-nous ?</h3>
			<p>Montauban, Tarn-Et-Garonne, France</p>
			<p>
				<span class="lite1">Tel:</span> 06 88 48 74 25<br />
				<span class="lite1">E-mail:</span> bonjourmllegermn@gmail.com
			
	</div>
	
	<h3 class="widget-title">Prochains Concerts</h3>
	<?php 
		
		$req = "SELECT * FROM concert";
		$resultat = $connexion->query($req) or die ('Erreur dans la requête '.$sql);
		$nbLig=$resultat->rowcount();
		for ($i =0; $i < $nbLig; $i++)
		{ ?>
			<div class="sidebox widget">
				
					<?php 
						$ligne = $resultat->fetch();
						$date = $ligne['date'];
						$descriptionC = $ligne['description'];
						$lieu = $ligne['lieu'];		

						echo "<h4>$lieu</h4>";
						echo "<h5>$date</h5>";
						echo "<p>$descriptionC<br></p>
						<p></p>";
						
						echo"</div>";
		}
			
		
		?>
	
</div>
<!--End Sidebar -->
<div class="clear"></div>

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