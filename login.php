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
        <div class="card-header">Connexion</div>
        <div class="card-body">
            <!--formulaire-->
            <form method="post" action="authentifier.php">
                <div class="form-group">
                    <label>Login</label>
                    <input type="text" name="login" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mt-3">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>