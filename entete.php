<nav class="navbar navbar-expand-lg bg-body-tertiary">
    
<ul class="navbar-nav">
    <?php
    if(isset($_SESSION["PROFILE"])){?>
        <li class="nav-item">
          <a class="nav-link" href="etudiants.php">Etudiants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="saisirEtudiants.php">Ajouter étudiant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Se deconnecter</a>
        </li>
        <?php }else{?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">S'inscrire</a>
        </li>
        <?php }?>
    </ul>
</nav>