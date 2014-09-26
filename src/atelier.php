<html>

<?php>
$bdd=new PDO('mysql:host=localhost;dbname=c	nrs', 'root', 'group6');

$query = ("SELECT * FROM atelier WHERE idA ='%s'",
$_GET['idA']);
$result = mysql_query($query);
?>

<body>
nom : <?php> echo $row['nom'] ?> 
lieu : <?php> echo $row['lieu'] ?> 
theme : <?php> echo $row['theme'] ?> 
laboratoire : <?php> echo $row['labo'] ?>

descriptif : <?php> echo $row['descriptif'] ?>
</body>

<php
mysql_free_result($result);
?>

</html>