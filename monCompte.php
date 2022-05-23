<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <title>Mon Compte</title>
    <link rel="stylesheet" href="style.css">

</head>

<body class="accueil">
<?php
include_once "header.php"
?>
<div class="account-container">
<div class="account-descriptor-container">
    <div class="account-descriptor-text">
        <h1>Information de compte</h1>
            <?php
            echo '<div class="account-descriptor-title"><p> Votre Nom :</p><p class="account-descriptor-usable">'.$_SESSION['name'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Votre prenom :</p><p class="account-descriptor-usable">'.$_SESSION['firstName'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Numéro de telephone :</p><p class="account-descriptor-usable">+33'.$_SESSION['phoneNumber'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Date de naissance :</p><p class="account-descriptor-usable">'.$_SESSION['dateNaissance'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Sexe :</p><p class="account-descriptor-usable">'.$_SESSION['sex'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Adresse E-mail :</p><p class="account-descriptor-usable">'.$_SESSION['mail'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Mots de passe :</p><p class="account-descriptor-usable"> ********</p></div>';
            if($_SESSION['admin']==1){
                echo '<div class="account-descriptor-title"><p>Compte : </p><p class="account-descriptor-usable" style="color: red"> Admin </p></div>';
            } else{
                echo '<div class="account-descriptor-title"><p>Compte : </p><p class="account-descriptor-usable"> Utilisateur </p></div>';
            }
            ?>
    </div>
    <div class="account-data-container">
        <div class="chart-container">
            <canvas id="mycanvas"></canvas>
        </div>


        <!-- javascript -->
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/chart.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app2.js"></script>
    </div>
</div>
    <?php
    if($_SESSION['admin']==1){
        echo '
        <div class="admin-search-bar-container">
            <div><h1>Rechercher un utilisateur</h1></div>
                <div class="form-group field">
                    <script type="text/javascript" src="js/script.js"></script>
                    <input class="search-bar" autocomplete="off" type="text" id="search" placeholder="Recherche" />
                    <label class="form-label" for="search">Recherche</label>
                    <div class="search-bar-result" id="display"></div>
                </div>
    </div>';
    } else{

    }
    ?>

</div>
</body>
<?php
include_once "footer.php"
?>