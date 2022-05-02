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
<div class="account-descriptor-container">
    <div class="account-descriptor-text">
        <h1>Information de compte</h1>
            <?php
            echo '<div class="account-descriptor-title"><p> Votre Nom :</p><p class="account-descriptor-usable">'.$_SESSION['name'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Votre prenom :</p><p class="account-descriptor-usable">'.$_SESSION['firstName'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Numéro de telephone :</p><p class="account-descriptor-usable">+33'.$_SESSION['phoneNumber'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Date de naissance :</p><p class="account-descriptor-usable">'.$_SESSION['dateNaissance'].'</p></div>';
            echo '<div class="account-descriptor-title"><p> Sexe :</p><p class="account-descriptor-usable">'.$_SESSION['sex'].'</p></div>';

            ?>
    </div>
</div>
</body>
<?php
include_once "footer.php"
?>