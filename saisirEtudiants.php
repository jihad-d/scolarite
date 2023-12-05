<?php
    require_once("securite.php");
    if(!($_SESSION ["PROFILE"]["ROLE"] =="SCOLARITE")){
        //$_SERVER[HTTP_REFERER] : retourne à la page précédente
        header("location: $_SERVER[HTTP_REFERER]");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ajouter etudiants</title>
</head>
<body>
    <?php require_once("entete.php");
    ?>
    <div class="card">
        <div class="card-header">Ajouter étudiants</div>
        <div class="card-body">
            <!--formulaire-->
            <form method="post" action="saveEtudiant.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mt-3">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>