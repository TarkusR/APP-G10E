<?php

session_start();
if(isset($_GET['logout']))
    session_destroy();
?>

<!DOCTYPE html>
<head>
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="accueil">
    
    <h1> <span>Bienvenue sur l'espace Care-Workplace </span> </h1>
    
    <div id="zone">
    <div> <img src="logomeasure.png" alt="logomeasure" width="200" height="180" id="logo">  </div>
    <ul>
        <li><a href="index.php" class="lienmenu">Accueil</a></li>
        <li><a href="LeProduit.php" class="lienmenu">Le produit</a></li>
        <li class="lienmenu">Espace Personnel</li>
        <li class="lienmenu">Ludique</li>
        <li class="lienmenu">FAQ</li>
        <li class="lienmenu">Nous contactez</li>
        <li class="lienmenu"> dégage</li>
    </ul>

        <?php
        if(isset($_SESSION["loggedin"])){
            echo ' <a class="monCompte lienmenu">Mon compte </a> ';
            echo '<a href="logout.php" class="lienmenu">  <button class="connexion" >Déconnexion</button> </a> ';
        } else{
            echo ' <a  href="login.php" class="lienmenu">  <button class="connexion">Connexion</button> </a> ';
        }


        ?>

    </div>

</body>