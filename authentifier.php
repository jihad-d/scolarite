<?php
// récupérer les données via formulaire
$login = $_POST ["login"];
// md5(): fonction de hashage ; permet de rendre un message incompréhensible/secret
$pwd = md5($_POST["password"]);
require_once("connexion.php");
$ps = $pdo->prepare("SELECT * FROM utilisateurs WHERE LOGIN=? AND PASSWORD=?;");
$params = array($login, $pwd);
$ps->execute($params);
if($user = $ps->fetch()){
    session_start();
    $_SESSION["PROFILE"] = $user;
    header("location: etudiants.php");
}else{
    header("location: login.php");
}

?>