<?php
// récupérer les données
$code = $_GET['code'];
$nom = $_POST["nom"];
$email = $_POST["email"];
$nomphoto = $_FILES["photo"]["name"];
require_once("securite.php");

if($nomphoto == ""){
    $ps = $pdo->prepare("UPDATE etudiants SET NOM=?, EMAIL=? WHERE CODE=?");

    $params = array($nom,$email,$code);
}else{
    // récupérer l'image dans le projet
    // $tempFile : chemin du fichier temp
    $tempFile = $_FILE ["photo"]["tmp_name"];
    move_uploaded_file($tempFile,"./images".$nomphoto);
    //echo $tempFile;
    // établire la connexion vers la bd
    //preéparer la requête 
    $ps = $pdo->prepare("UPDATE etudiants SET NOM=?, EMAIL=? PHOTO=? WHERE CODE=?");
    $params = array($nom,$email,$nomphoto,$code);
}

// excuter requête
$ps->execute($params);

// redirection vers la page etudiants.php
header("location: etudiants.php");

?>