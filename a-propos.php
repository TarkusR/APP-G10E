<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>À propos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<?php  include "header.php"; ?>

<div class="a-propos-text-container">
    <div class="ludique-title-container">
        <h1>Quelles sont les causes du stress</h1>
    </div>
<div class="ludique-content-container-right">
    <div class="ludique-content-text-container">
        <p>Repérer les symptômes du stress isolant les causes, cette article vous aidera à mieux comprendre votre stress et à vous poser les bonnes questions pour y trouver vos solutions.
            <br> Cliquez sur l'image pour accéder à l'article</p>
    </div>
    <div class="ludique-content-media-container">
        <a href="https://www.theraserena.com/stress/dossiers/decouvrez-les-5-causes-majeures-du-stress"><img src="https://media-exp1.licdn.com/dms/image/C4E0BAQFe3-i_jLQZuw/company-logo_200_200/0/1594378233349?e=2147483647&v=beta&t=FeqiewjeK0gVcKLS7u26MC0s0K8FfdH6koimqP3oE9Q">
        </a>
    </div>
</div>
</div>
<div class='faq'>
    <div class="faq-title"><h1>Questions les plus frequentes</h1></div>
    <input id='faq-a' type='checkbox'>
    <label for='faq-a'>
        <p class="faq-heading">Comment puis-je contacter le support d'Infinite Measure?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">L'onglet "Nous contacter" vous permet d'envoyer un message directement au support d'Infinite Measure</p>
    </label>
    <input id='faq-b' type='checkbox'>
    <label for='faq-b'>
        <p class="faq-heading">Comment puis-je améliorer ma gestion du stress?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Vous trouverez des articles décrivant les différentes sources de stress ainsi que des aides pour le combattre dans la rubrique "Ludique"</p></label>
    <input id='faq-c' type='checkbox'>
    <label for='faq-c'>
        <p class="faq-heading">Comment obtenir votre produit?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Merci de nous contacter par mail à l'adresse renseignée en bas de page</p></label>
    <input id='faq-d' type='checkbox'>
    <label for='faq-d'>
        <p class="faq-heading">Comment consulter mes données?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Vous retrouverez les données de votre fréquence cardiaque, du taux de CO2 et de la température dans la rubrique "Mon compte" après vous être connecté.</p></label>
    <input id='faq-e' type='checkbox'>
    <label for='faq-e'>
        <p class="faq-heading">Quel est le prix de la solution d'Infinite Measure?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Réponse à venir sous peu.</p></label></label>
    <input id='settings' type='checkbox'>
    <input id='faq-f' type='checkbox'>
    <label for='faq-f'>
        <p class="faq-heading">De quelle manière la solution d'Infinite Measure améliore la qualité de vie de mon espace de travail?</p>
        <div class='faq-arrow'></div>
        <p class="faq-text">Réponse à venir sous peu.</p></label></label>
</div>
<?php  include "footer.php"; ?>

</body>
</html>