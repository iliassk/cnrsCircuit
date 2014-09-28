<!DOCTYPE html>

<html>
    <head>
        <title>Modication Atelier</title>
        <meta charset="utf-8" />
    </head>
    <body>

    	<?php
		if(isset($_GET['idA']))
			$idA = $_GET['idA'];

		$bdd=new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6');

		$req = $bdd->prepare('SELECT * FROM atelier WHERE idA = :idA');
		$req->execute(array('idA' => $idA));

		$result = $req->fetch();
		?>

    	<form method="post" action= "<?php echo "atelier.php?edit=" . $idA . "&idA=" .$idA ?>" >
 
<p>
	Intitulé de l'atelier : 
    <input type="text" name="intitule_atelier" placeholder="Titre" value="<?php echo $result['nom']; ?>" /> <br />
    Laboratoire :
    <input type="text" name="laboratoire" placeholder="Laboratoire" value="<?php echo $result['labo']; ?>" /> <br />
    Lieu : <br />
	<input type="text" name="lieu" placeholder="Lieux"value="<?php echo $result['lieu']; ?>" /> <br />
    Dicipline : <br />

    <select name="discipline">
    <option value="Physique" <?php if ($result['theme'] == "Physique") echo 'selected = "selected"' ; ?> >Physique</option>
    <option value="Chimie" <?php if ($result['theme'] == "Chimie") echo 'selected = "selected"' ; ;?> >Chimie</option>
    <option value="Biologie" <?php if ($result['theme'] == "Biologie") echo 'selected = "selected"' ; ?> >Biologie</option>
    <option value="Informatique" <?php if ($result['theme'] == "Informatique") echo 'selected = "selected"' ; ?> >Informatique</option>
    <option value="Mathematiques" <?php if ($result['theme'] == "Mathematiques") echo 'selected = "selected"' ; ?> >Mathematiques</option>
	</select> <br />
	<br />
    Descriptif de l'atelier : <br />
    <textarea name="descriptif" rows="8" cols="45" placeholder="Entrez la description de l'atelier"><?php echo $result['descriptif']; ?></textarea>

    <input type="submit" name="valider" />
</p>
 
</form>

    </body>

</html>