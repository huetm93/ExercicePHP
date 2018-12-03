<TYPE html>
<html>
<head>
	
</head>
<body>



<form name="coordonnee" method="post" action="exercice3.php">
        Entrez votre nom : <input type="text" name="nom"/> <br/>
        Entrez votre prénom : <input type="text" name="prenom"/><br/>
        <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
if (isset($_POST['nom']) AND isset($_POST['prenom'])) {

setcookie('name', $_POST['nom']); 
setcookie('surname', $_POST['prenom']); 

?>

</body>
</html>