<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "group6";
  $dbname = "cnrs";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }

?>


<html lang="fr">
	<head>
		<title>Liste des Ateliers</title>
	</head>
	<body>

	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>