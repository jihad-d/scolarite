<?php

// récupérer les données via le formulaire
/* $_POST : tableau/array prédéfinit en php qui permet de récupéer les infos saisie au niveau du formulaire 
   tableau en php : variable capable de stocker pls valeurs en même temps

   var_dump ou print-r : afficher contenu d'un tableau
*/

//var_dump($_POST); pour débuger

$nom = $_POST["nom"];
$email = $_POST["email"];
$nomphoto = $_FILES["photo"]["name"];
// récupérer l'image dans le projet
// $tempFile : chemin du fichier temp
$tempFile = $_FILE ["photo"]["tmp_name"];
move_uploaded_file($tempFile,"./images" .$nomphoto);
//echo $tempFile;


// établire la connexion vers la bd
require_once("connexion.php");

// préparer la requête
$ps = $pdo->prepare("INSERT INTO etudiants(NOM,EMAIL,PHOTO) VALUES (?,?,?);");
// récupérer
$params = array($nom,$email,$nomphoto);
$ps->execute($params);
header("location: etudiants.php");


?>