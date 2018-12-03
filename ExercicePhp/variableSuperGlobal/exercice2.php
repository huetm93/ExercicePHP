<?php
//Fomulaire nom et prénom et age;

session_start();

// Variable session

$_SESSION['surname'] = (string) 'Maxime';
$_SESSION['name'] = (string) 'Huet';
$_SESSION['age'] = (integer) 25;

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>


<a href="exercice2_2.php">Lien</a>


</body>
</html>