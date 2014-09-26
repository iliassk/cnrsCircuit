<html>

<title> atelier </title>

<body>

<?php

$bdd=new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6');
$query = ("SELECT * FROM atelier WHERE idA ='%s'", $_GET['idA']);
$result = mysql_query($query);
?>

<!-- affiche les informations-->
nom : <?php echo $row['nom']; ?> 
lieu : <?php echo $row['lieu']; ?> 
theme : <?php echo $row['theme']; ?> 
laboratoire : <?php echo $row['labo']; ?>

descriptif : <?php echo $row['descriptif']; ?>

<php
<!-- libere espace memoire -->
mysql_free_result($result);
?>

</body>

</html>
