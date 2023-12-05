<?php
    session_start();
    // isset() : permet de vérifier si une variable est définit et non null
    if(!isset($_SESSION["PROFILE"])){
        header("location: login.php");
    }
?>