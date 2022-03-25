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

    <div id="zone">
    <div> <img src="logomeasure.png" alt="logomeasure" width="200" height="180" id="logo">  </div>
    <ul>
        <li><a href="index.php" class="lienmenu">Accueil</a></li>
        <li><a href="LeProduit.php" class="lienmenu">Le produit</a></li>
        <li>Espace Personnel</li>
        <li>Ludique</li>
        <li>FAQ</li>
        <li>Nous contactez</li>     
    </ul>

        <?php
        if(isset($_SESSION["loggedin"])){
            echo ' <a href="monCompte.php" class="monCompte">Mon compte </a> ';
            echo '<a href="logout.php">  <button class="connexion" >Déconnexion</button> </a> ';
        } else{
            echo ' <a  href="login.php">  <button class="connexion">Connexion</button> </a> ';
        }


        ?>

    </div>

</body>