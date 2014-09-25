<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h3></h3>
        
	<?php include("menu.php"); ?>

        <p>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php include("formulaire-ajout-atelier.php"); ?>

      <?php
		$monfichier = fopen('compteur.txt', 'a+');

		$nb_vues = fgets($monfichier);
		$nb_vues++;
		fseek($monfichier,0);
		fputs($monfichier, $nb_vues);


		fclose($monfichier);
		echo 'Page vue ' . $nb_vues . ' fois.';
		?>

    </body>
</html>
