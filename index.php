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
    <h1>Le bien-être au travail</h1>
    <p class="descriptor-text">L’approche bien-être au travail vise à développer dans l’entreprise une conception de l’efficacité et de la performance qui soit soucieuse de la santé des salariés et favorise leur motivation et leur implication dans le travail. La mise en œuvre d’une politique de bien-être peut ainsi contribuer à l’épanouissement professionnel des salariés mais aussi à l’amélioration de l’ambiance de travail au sein des équipes et au renforcement du climat de respect et d’écoute. Elle contribue aussi à prévenir les risques psychosociaux, en amont des manifestations aiguës de stress, de violence ou d’épuisement.
    </p>
    </div>
    <div class="descriptor-image-container" >
        <img class="descriptor-image" src="src/image-bureau.jpg" alt="">
    </div>
</div>


<div class="consult-data-descriptor">
    <div class="consult-data-text">
        <h1>Vous souhaitez savoir si vous travaillez dans un environnement agréable?</h1>
        <p> Cliquez juste ici </p>
    </div>
    <div class="consult-data-button">
        <a href="login.php"> <div id="btn"><span class="noselect">Consulter vos données</span><div id="circle"></div></div></a>
    </div>

</div>
<?php include_once "footer.php" ?>
</body>

</html>
