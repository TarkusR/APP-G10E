<header>
    <div class="zone">

        <div> <img src="logomeasure.png" alt="logomeasure" width="200" height="180" id="logo" class="lienmenu"></div>
        <div><a href="index.php" class="lienmenu">Accueil</a></div>
        <div><a href="LeProduit.php" class="lienmenu">Le produit</a></div>
        <div><a href="index.php" class="lienmenu">Ludique</a></div>
        <div><a href="FAQ.php" class="lienmenu">FAQ</a></div>
        <div><a href="nousContactez.php" class="lienmenu">Nous contacter</a></div>
        <?php
            if(isset($_SESSION["loggedin"])){
                echo '<div> <a href="monCompte.php" class="lienmenu monCompte">Mon compte </a></div>';
                echo '<div><a href="logout.php" class=" lienmenu">  <button class="connexion" >Déconnexion</button> </a></div> ';
            } else{
                echo ' <div><a  href="login.php" class=" lienmenu">  <button class="connexion">Connexion</button> </a></div> ';
            }
        ?>

    </div>
</header>