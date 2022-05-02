<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="FAQbody">
<?php  include "header.php"; ?>
    <div>
    <h2>FAQ</h2>
    <div class="dropdown">
    <button class="faq">Comment utiliser le capteur cardiaque?</button>
        <div class="reponse">
            <p>Une notice est fournie avec les capteurs cardiaques</p>
        </div>

    <button class="faq">Comment vous contacter?</button>
        <div class="reponse">
            <p>Une section est dédiée à cela sur notre site, il vous suffit de vous rendre sur la page "Nous Contacter"</p>
        </div>

    <button class="faq">Comment effectuer la maintenance de vos produits?</button>
        <div class="reponse">
            <p>Nous nous occupons de la maintenance tous les 3 ans</p>
        </div>
    </div>
    </div>
<?php  include "footer.php"; ?>

</body>
</html>