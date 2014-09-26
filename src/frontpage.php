<!DOCTYPE html>

<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>

	<?php
	try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'groupe6');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	?>
        
	<?php include("menu-ateliers.php"); ?>

        <p>
        <br />
        <br />
            Ajouter un atelier :
        </p>        
        
        <?php include("formulaire-ajout-atelier.php"); ?>

    </body>
</html>
