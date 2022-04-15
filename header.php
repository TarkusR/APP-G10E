<?php

?>

<div id="zone">
    <div> <img src="logomeasure.png" alt="logomeasure" width="200" height="180" id="logo" class="lienmenu"></div>
    <div><a href="index.php" class="lienmenu">Accueil</a></div>
    <div><a href="LeProduit.php" class="lienmenu">Le produit</a></div>
    <div><a href="espacePersonnel.php" class="lienmenu">Espace Personnel</a></div>
    <div><a href="index.php" class="lienmenu">Ludique</a></div>
    <div><a href="FAQ.php" class="lienmenu">FAQ</a></div>
    <div><a href="nousContactez.php" class="lienmenu">Nous contacter</a></div>
    <div><?php
        if(isset($_SESSION["loggedin"])){
            echo ' <a href="monCompte.php" class="lienmenu monCompte">Mon compte </a> ';
            echo '<a href="logout.php" class=" lienmenu">  <button class="connexion" >Déconnexion</button> </a> ';
        } else{
            echo ' <a  href="login.php" class=" lienmenu">  <button class="connexion">Connexion</button> </a> ';
        }
        ?></div>
</div>