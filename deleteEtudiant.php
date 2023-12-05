<?php
//récupérer le code de l'étudiant
$cd = $_GET["x"];
require_once("connexion.php");
$ps = $pdo->prepare("DELETE FROM etudiants WHERE CODE=?");
$params = array($cd);
$ps->execute($params);
//redirection vers la page listeEtudiants
header("location: etudiants.php");

?>