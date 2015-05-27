<!DOCTYPE HTML>
<?php require("connexionBDD.php"); ?>
<html><head><title>Mlle Germn | Spectacle musical autour de Jacques Brel - Contact</title><meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style"></head><body>
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
          <li class="base"><a href="video.php">Vidéos</a></li>
          <li class="base"><a href="bio.php">Bio</a></li>
          <li class="selected"><a href="contact.php">Contact</a></li>
		  <li class="base"><a href="another_page.html">Administration</a></li>
        </ul></div>
        </ul></div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <?php include("sidebar.php"); ?>
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Contact</h1>
        <p>Vous pouvez contacter la troupe ici:</p>
		
		<h4>Telephone : <h5>06 88 48 74 25</h5> </h4> 
		</br>
		<h4>Mail : </h4>
		</br>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Nom</span><input class="contact" type="text" name="your_name" value=""></p>
            <p><span>Adresse e-mail</span><input class="contact" type="text" name="your_email" value=""></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span> </span><input class="submit" type="submit" name="contact_submitted" value="Envoyer"></p>
          </div>
        </form>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright © black &amp; white | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>
</div>
  </div>
</body></html>
