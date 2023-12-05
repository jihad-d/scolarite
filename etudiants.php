<?php

    //établir la connexion vers la base de données
    require_once("securite.php");
    require_once("connexion.php");

    //préparer la requête
    $ps = $pdo->prepare("SELECT * FROM etudiants");
    $ps->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Liste etudiants</title>
</head>
<body>
    <?php require_once("entete.php");
    ?>
    <div class="card mt-4">
        <div class="card-header">Liste étudiants</div>
        <div class="card-body"></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>CODE</th>
                        <th>NOM</th>
                        <th>EMAIL</th>
                        <th>PHOTO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($et = $ps->fetch()){?>
                    <tr>
                        <td><?php echo $et["CODE"]?></td>
                        <td><?php echo $et["NOM"]?></td>
                        <td><?php echo $et["EMAIL"]?></td>
                        <td>
                            <img src="./images/<?php echo $et["PHOTO"];?>"height="100" width="100">
                        </td>
                        <?php if($_SESSION["PROFILE"]["ROLE"] == "SCOLARITE"){ ?>
                            <td><a href="editEtudiant?y=<?php echo $et["CODE"];?>"class="btn btn-primary">Modifier</a></td>
                            <td><a onclick=" return confirm('Etes vous sur ...')" href="deleteEtudiant.php?x=<?php echo $et["CODE"];?>"class="btn btn-danger">Supprimer</a></td>
                            <?php }else{ ?>
                            <td></td>
                            <td></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
    </div>
    
</body>
</html>