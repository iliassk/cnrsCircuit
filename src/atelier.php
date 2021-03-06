<!DOCTYPE html>
<html>
	<head>
		<title> Atelier </title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>

<?php

$bdd=new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6');

if(isset($_GET['edit'])){
	$idA = intval($_GET['edit']);

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

		$string = 'UPDATE atelier SET nom ="'.$nom_atelier.'", descriptif ="'.$descriptif.'", theme = "'.$discipline.'", lieu = "'.$lieu.'", labo = "'.$nom_laboratoire.'" WHERE idA = "'.$idA.'"';
		$bdd->exec($string);
		//$req = $bdd->prepare('UPDATE atelier SET nom = :nom, descriptif = :desciptif, theme = :theme, lieu = :lieu, labo = :labo WHERE idA = :idA');
		/*$req->execute($test = array(
			'nom' => $nom_atelier,
			'descriptif' => $descriptif,
			'theme' => $discipline,
			'lieu' => $lieu,
			'labo' => $nom_laboratoire,
			'idA' => $idA
	));*/

		//var_dump($test);
	}
}


if(isset($_GET['idA'])){
	$idA = $_GET['idA'];

	$req = $bdd->prepare('SELECT * FROM atelier WHERE idA = :idA');
	$req->execute(array('idA' => $idA));
}

$result = $req->fetch();
?>
<h1>Description de l'atelier</h1>

<p id="nom">Nom : <?php echo $result['nom']; ?> </p>
<p id="lieu">Lieu : <?php echo $result['lieu']; ?> </p>
<p id="theme">Theme : <?php echo $result['theme']; ?> </p>
<p id="laboratoire">Laboratoire : <?php echo $result['labo']; ?></p>

<p id="descriptif">Descriptif : <?php echo $result['descriptif']; ?></p>
<?php
//$req->closeCursor(); // Termine le traitement de la requÃªte
?>

<form method="post" action= "<?php echo "index.php?delete=" . $idA ?>">

	<input type="submit" value="Supprimer" />

</form>

<form method="post" action= "<?php echo "modifier-atelier.php?idA=" . $idA ?>">

	<input type="submit" value="Modifier" />
</form>

<form method="post" action="index.php">

  <input type="submit" value="Lister les ateliers">
</form>


	</body>
</html>
	
