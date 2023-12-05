<?php
try{
    // établir la connexion vers la base de donnée
    $con = "mysql:host=localhost;port=3306;dbname=scolarite";
    $pdo = new PDO($con, 'root','');
    //new : permet d'instancier un objet à partir d'une classe

}catch(PDOException $err){
    $msg= "ERROR: ".$err->getMessage();
    //die : fonction prédéfinit en php qui permet de tuer un script après l'affichage du msg d'erreur
    die($msg);

}

?>