<!DOCTYPE html>

<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf-8" />
    </head>
    <body>

	<?php
	try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	?>

	<?php

	$nom_atelier = $_POST['intitule_atelier'];
	$nom_laboratoire = $_POST['laboratoire'];
	$lieu = $_POST['lieu'];
	$discipline = $_POST['discipline'];
	$descriptif = $_POST['descriptif'];

	if ($nom_atelier != NULL &&
		$nom_laboratoire != NULL &&
		$lieu != NULL &&
		$discipline != NULL &&
		$descriptif != NULL)
	{ 

		$req = $bdd->prepare('INSERT INTO atelier(idA, nom, descriptif, theme, lieu, labo) VALUES(:idA, :nom_atelier, :descriptif, :discipline, :lieu, :laboratoire)');
		$req->execute(array(
			'idA' => 999,
			'nom_atelier' => $nom_atelier,
			'descriptif' => $descriptif,
			'discipline' => $discipline,
			'lieu' => $lieu,
			'laboratoire' => $laboratoire
	));

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
