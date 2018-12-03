<?php

if (isset($_POST['nom']) AND isset($_POST['prenom'])) {

setcookie("name", "Narvalo"]); 
setcookie("surname", "Adrien"); 

echo $_COOKIE['name'] . ' ' . $_COOKIE['surname'];

} else {
	echo '<TYPE html>
<html>
<head>
	
</head>
<body>



<form name="coordonnee" method="post" action="exercice5.php">
        Entrez votre nom : <input type="text" name="nom"/> <br/>
        Entrez votre prénom : <input type="text" name="prenom"/><br/>
        <input type="submit" name="valider" value="OK"/>
    </form>
    </body>
</html>';
}


?>

