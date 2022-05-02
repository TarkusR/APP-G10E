<?php

session_start();
if(isset($_GET['logout']))
    session_destroy();
?>

<!DOCTYPE html >
<html lang ="en">
<head>
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="accueil">
<?php  include('header.php'); ?>
<div class="landing-page-background">
    <section>
        <div class = "wave wave1"></div>
        <div class = "wave wave2"></div>
        <div class = "wave wave3"></div>
        <div class = "content-outside">
            <div class = "content-text">
                <h1>L'outil de mesure du bien être intérieur</h1>
                <h3>Votre espace personnel </h3>
                <a href="login.php"> <div id="btn"><span class="noselect">Se connecter</span><div id="circle"></div></div></a>
            </div>

        </div>
    </section>

</div>
<div class="descriptor">

</div>
<?php include_once "footer.php" ?>
</body>

</html>
