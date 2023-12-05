<?php
require_once("securite.php");
$code=$_GET["y"];
require_once("connexion.php");
$ps = $pdo->prepare("SELECT * FROM etudiants WHERE CODE=?");
$ps->execute(array($code));
$etudiant = $ps->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modifier etudiants</title>
</head>
<body>
    <?php require_once("entete.php");
    ?>
    <div class="card">
        <div class="card-header">Modifier étudiants</div>
        <div class="card-body">
            <!--formulaire-->
            <form method="post" action="modifierEtudiant.php?code=<?php echo $etudiant["CODE"]?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?php echo $etudiant["NOM"]?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $etudiant["EMAIL"]?>">
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control">
                    <img src="images/<?php echo $etudiant["PHOTO"]?>" height="100" width="100">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mt-3">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>