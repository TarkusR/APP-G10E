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
                <h1 >L'outil de mesure du bien être intérieur</h1>
                <h3 style="color : white;">Votre espace personnel </h3>
                <?php

                if(isset($_SESSION["loggedin"])){

                } else{
                   echo '<a href="login.php"> <div id="btn"><span class="noselect">Se connecter</span><div id="circle"></div></div></a>';
                }
                ?>

            </div>

        </div>
    </section>
</div>
<div class="descriptor">
    <div class="descriptor-text-container">
    <h1>TEST</h1>
    <p class="descriptor-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui, placerat accumsan turpis. Integer ante diam, eleifend eget blandit a, gravida ut eros. Mauris tincidunt, libero sit amet egestas convallis, leo risus porta arcu, a tincidunt turpis tortor vitae felis. Integer mattis enim non condimentum ornare. Duis bibendum massa tellus, a ornare tortor tempus quis. Vestibulum dictum faucibus ligula quis sagittis. Nam aliquam dolor nec felis pulvinar, id elementum felis luctus. Nam varius, orci ac accumsan fermentum, sapien elit varius mi, vitae tempus lorem arcu at sapien. Vestibulum hendrerit, tellus a pretium feugiat, massa nisi tempor ligula, non congue justo quam et nulla. Morbi finibus velit est, non tristique risus faucibus sit amet. Aliquam id pulvinar neque. Integer et euismod dolor, sed lacinia tortor. Aenean lobortis est vitae ipsum posuere, eu luctus dui volutpat. Nunc tempus ex a sapien ultricies pulvinar. Cras nisl lacus, imperdiet ac augue at, rhoncus pulvinar felis.</p>
    </div>
    <div class="descriptor-image-container" >
        <img class="descriptor-image" src="src/image-bureau.jpg" alt="">
    </div>
</div>
<div class="consult-data-descriptor">
    <div class="consult-data-text">
        <h1>Titre</h1>
        <p> Sous titre </p>
    </div>
    <div class="consult-data-button">
        <a href="login.php"> <div id="btn"><span class="noselect">Consulter vos données</span><div id="circle"></div></div></a>
    </div>

</div>
<?php include_once "footer.php" ?>
</body>

</html>
