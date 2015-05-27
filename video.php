<!DOCTYPE HTML>
<?php require("connexionBDD.php"); ?>
<html><head><title>Mlle Germn | Spectacle musical autour de Jacques Brel - Videos</title><meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style"></head><body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Mlle GermN<span class="logo_colour"></span></a></h1>
        </div>
      </div>
      <div id="menubar">
     <ul id="menu"><!-- put class="selected" in the li tag for the selected page - to highlight which page you're on --><li class="base"><a href="index.php">Accueil</a></li>
          <li class="base"><a href="examples.html">Musique</a></li>
          <li class="selected"><a href="video.php">Vidéos</a></li>
          <li class="base"><a href="bio.php">Bio</a></li>
          <li class="base"><a href="contact.php">Contact</a></li>
		  <li class="base"><a href="another_page.html">Administration</a></li>
        </ul></div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
       <?php include("sidebar.php"); ?>
     
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Vidéos</h1>
        <p>Vous trouverez ici toutes les vidéos des différents lives de Mlle GermN</p>
		<?php 
			$sql = "SELECT * FROM video";
			$result = $connexion->query($sql) or die ('Erreur dans la requête '.$sql);
			
			$nbLig=$result->rowcount();
			
			for ($i =0; $i < $nbLig; $i++)
			{
				$ligne = $result->fetch();
				
				$titre = $ligne['titre'];
				$lien = $ligne['lien'];
				$description = $ligne['description'];
				
				echo "<h2> $titre </h2>";
				?>   <p style="text-align: center;"><iframe width="560" height="315" src="<?php echo "$lien"; ?>" frameborder="0" allowfullscreen></iframe></p>  <?php

				echo "$description";
			}

		?>
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright © black &amp; white | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>
</div>
  </div>
</body></html>
