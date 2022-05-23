<header>
    <div class="zone">

        <div> <img src="logomeasure.png" alt="logomeasure" width="200" height="180" id="logo" class="lienmenu"></div>
        <div><a href="index.php" class="lienmenu">Accueil</a></div>
        <div><a href="ludique.php" class="lienmenu">Ludique</a></div>
        <div><a href="a-propos.php" class="lienmenu">À Propos</a></div>
        <div><a href="nousContactez.php" class="lienmenu">Nous contacter</a></div>
        <?php
            if(isset($_SESSION["loggedin"])){
                echo '<div> <a href="monCompte.php" class="lienmenu monCompte">Mon compte </a></div>';
                echo '<div><a class=" lienmenu">  <button onclick="disconnect()" class="connexion" >Déconnexion</button> </a></div> ';
            } else{
                echo ' <div><a  href="login.php" class=" lienmenu">  <button class="connexion">Connexion</button> </a></div> ';
            }
        ?>

    </div>
    <script>
        function disconnect() {
            var txt;
            if (confirm("Êtes vous sûr de vouloir vous déconnecter?")) {
                location.replace("logout.php")
            }
        }
    </script>
</header>