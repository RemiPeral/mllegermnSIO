<!-- insert your sidebar items here -->
		 <h3>Prochain Concerts</h3>
		<?php 
		
			$req = "SELECT * FROM concert";
			$resultat = $connexion->query($req) or die ('Erreur dans la requête '.$sql);
			$nbLig=$resultat->rowcount();
			for ($i =0; $i < $nbLig; $i++)
			{
				$ligne = $resultat->fetch();
				$date = $ligne['date'];
				$descriptionC = $ligne['description'];
                $lieu = $ligne['lieu'];		

				echo "<h4>$lieu</h4>";
				echo "<h5>$date</h5>";
				echo "<p>$descriptionC<br></p>
        <p></p>";
			}
			
		
		?>