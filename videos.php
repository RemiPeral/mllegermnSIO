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
					<li><a href="index.php">Accueil</a>
					<li><a href="musique.php">Musique</a>
						<ul>
							<li><a href="musique.php">Quelques extraits</a></li>
							<li><a href="concerts.php">Prochains concerts</a></li>
						</ul>
					</li>
					<li><a href="bio.php">Bio</a></li>
					<li class="active"><a href="videos.php">Vidéos</a></li>
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
<div class="intro">Vous trouverez ici toutes les vidéos des différents lives de Mlle GermN</div>
<ul class="social">
<li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li><li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li>
</ul>
<!-- Begin Blog Grid -->
<div class="blog-wrap">
	<!-- Begin Blog -->
	<div class="blog-grid">
	
	<?php 
			$sql = "SELECT * FROM video";
			$result = $connexion->query($sql) or die ('Erreur dans la requête '.$sql);
			
			$nbLig=$result->rowcount();
			
			for ($i =0; $i < $nbLig; $i++)
			{
				$ligne = $result->fetch();
				
				$titre = $ligne['titre'];
				$link = $ligne['lien'];
				$description = $ligne['description'];
				
				$media_url = "";

				
				//YOUTUBE
				if(preg_match('#(?<=(?:v|i)=)[a-zA-Z0-9-]+(?=&)|(?<=(?:v|i)\/)[^&\n]+|(?<=embed\/)[^"&\n]+|(?<=(?:v|i)=)[^&\n]+|(?<=youtu.be\/)[^&\n]+#', $link, $videoid)){
					if(strlen($videoid[0])) { $media_url = 'youtube:_:'.$videoid[0]; }
				}

				//VIMEO
				if(preg_match('#(https?://)?(www.)?(player.)?vimeo.com/([a-z]*/)*([0-9]{6,11})[?]?.*#', $link, $videoid)){
					if(strlen($videoid[5])) { $media_url = 'vimeo:_:'.$videoid[5]; }
				}
				
				$exp = explode(':_:', $media_url);
				$html = "";
				
				switch ($exp[0]) {
					case 'youtube':
						$html = '<iframe width="490" height="281" src="//www.youtube.com/embed/'.$exp[1].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>';
						break;
					case 'vimeo':
						$html = '<iframe width="490" height="281" src="http://player.vimeo.com/video/'.$exp[1].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
						break;
					case 'dailymotion':
						$html = '<iframe width="490" height="281" src="http://www.dailymotion.com/embed/video/'.$exp[1].'" frameborder="0" allowfullscreen></iframe>';
						break;
				 
				}
				
				
		?>
		<!-- Begin Vidéo Format -->
		<div class="post format-video box"> 
			<div class="video frame"><?php echo "$html"; ?></div>
			<h2 class="title"><a href="post.html"><?php echo "$titre";?> </a></h2>
			<p><?php echo "$description"; ?></p>
		
			<div class="details">
				<span class="icon-video"><a href="#">26 Avril 2015</a></span>
			</div>
			
		</div>
		<!-- End Vidéo Format -->
		<?php 
			}

		?>				
 	
 	</div>
	<!-- End Blog -->
</div>
<!-- End Blog Grid -->

<!-- Begin Page-navi -->
    <div id="navigation">
      <!-- 
			<div class="nav-next"><a href="#" ><span class="meta-nav-next">Newer posts &rarr;</span></a></div>
			 --> 
    </div>
    <!-- End Page-navi --> 

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