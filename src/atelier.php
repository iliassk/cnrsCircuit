


<?php
try {
    $con=new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6');
    $sql = 'SELECT * FROM atelier';
    $result = $con->query($sql);
    $all = $result->fetchAll(PDO::FETCH_NUM);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: Fetching All Rows</title>
</head>
<body>
<h1>Détails des ateliers</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
?>
<pre>
<?php print_r($all); ?>
</pre>
</body>
</html>