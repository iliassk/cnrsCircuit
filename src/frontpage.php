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
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo_options[1002] = 'SET NAMES \'UTF8\'';
    	$bdd = new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6', $pdo_options);
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
		$statement = $bdd->prepare("INSERT INTO atelier (idA, nom, descriptif, theme, lieu, labo)VALUES (:idA, :nom_atelier, :descriptif, :discipline, :lieu, :nom_laboratoire)");
		

		try {
		    $statement->execute(array(
		        "idA" => $idA,
		        "nom_atelier" => $nom_atelier,
		        "descriptif" => $descriptif,
		        "discipline" => $discipline,
		        "lieu" => $lieu,
		        "nom_laboratoire" => $nom_laboratoire
		    ));
		} catch(PDOException $e) {
		    echo "Exception caught: $e";
		}
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
