<?php


    $_SESSION["loggedin"]=true;


?>

<?php
function deconexion() {
    $_SESSION["loggedin"]=false;
}

if (isset($_GET['deconexion'])) {
    deconexion();
}
?>

<!DOCTYPE html>
<head>
    <title>Bienvenue</title>
    <link rel="stylesheet" href="Accueil.css">
</head>
<body>
    
    <h1> <span>Bienvenue sur l'espace Care-Workplace </span> </h1>
    
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
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false){
            echo ' <a  href="login.php">  <button class="connexion">Connexion</button> </a> ';

        } else{
            echo ' <button>mon compte</button>
 <a href="index.php?deconexion=true">  <button class="connexion" >Déconnexion</button> </a> ';
        }


        ?>



    </div>

</body>