
<?php

if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['sexe'])) {
echo 'Bonjour et bienvenu ' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . ' Vous êtes un(e) ' . $_GET['sexe'];
} else {
  echo '<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form name="coordonnee" method="get" action="exercice6.php">
   <p>
       <label for="pays">De quel sexe êtes vous ? </label>
       <select name="sexe" id="sexe">
           <option value="homme">Homme</option>
           <option value="femme">Femme</option>
       </select>
   </p>
    Entrez votre nom : <input type="text" name="nom"/> <br/><br/>
    Entrez votre prénom : <input type="text" name="prenom"/><br/><br/>
    <input type="submit" name="valider" value="OK"/>
</form>
</body>
</html>';
}

?>
