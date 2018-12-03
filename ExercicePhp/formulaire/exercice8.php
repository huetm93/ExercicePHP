


<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Document</title> 
</head>
<body>
<?php 
 if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['file'])){ 
  
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $genre = $_POST['Genre'];
  $file = new SplFileInfo($_POST["file"]);

echo $genre . ' ' . $nom . ' ' . $prenom . '<br> Extension du fichier : '; 
if($file->getExtension() == "pdf"){ 
  echo "le fichier est un pdf";
}else {
echo "le fichier n'est pas un pdf"; }; 
}else {
 ?> 
 <form method="post" action="exercice8.php">
  <select name="Genre" id="Genre">
   <option value="Mr">Monsieur</option>
   <option value="Mme">Madame</option>
  </select> <label>Nom : </label>
    <input type="text" name="nom" id="nom"> 
  <label>Prenom : </label> 
    <input type="text" name="prenom" id="prenom" >
    <input type="file" name="file"> 
    <input type="submit" value="Envoyer"/> </form> 
    <?php } ?> 
  </body> 
  </html>