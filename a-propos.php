<?php
session_start();

?>
<?php
try {
    $db = new PDO('mysql:host=localhost:3306;dbname=ce1;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


/*$question = $db->prepare('SELECT text FROM question WHERE IDQuestion = 1');

$question->execute();
$result2 = $question->fetch();*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>À propos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body >
<?php  include "header.php"; ?>

<div class="a-propos-text-container">
    <div class="ludique-title-container">
        <h1>Solution Infinite Measure</h1>
    </div>
<div class="ludique-content-container-right">
    <div class="ludique-content-text-container">
        <p>Le produit d’Infinite Measure permet de mesurer la qualité de votre environnement de travail grâce à différents capteurs placés sur le lieu de travail. Ces capteurs prélèvent différentes données :</p>
        <ul>
            <li>Le taux de CO2 présent dans l’air</li>
            <li>La température ambiante </li>
            <li>Le taux d’humidité présent</li>
            <li>La nuisance sonore</li>
            <li>La fréquence cardiaque</li>

        </ul>
        <p>Infinite Measure a développé pour vos espaces de travail collaboratif un réseau de capteurs. Un boîtier sera installé dans votre espace de travail pour étudier la qualité environnementale de l’espace de travail. Des capteurs cardiaques seront distribués à vos employés s’il le souhaite. La solution d’Infinite Measure permettra à vos employés de comprendre l’enjeu du stress au travail et d’apprendre les bases de la relaxation. Pour votre entreprise l’intérêt est d’améliorer la productivité de vos employés en créant un environnement de travail sain.</p>
    </div>
    <div class="ludique-content-media-container">
        <a href="https://infinitemeasures.fr/vues/fr/index.php"><img style="transform: scale(0.8); height: 50vh; width: 30vw" src="src/6CFLqM7.png">
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
        <?php
        echo "<p class='faq-heading'></p>";?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'></p></label></label>";?>

</div>
<div class="consult-data-descriptor">
    <div class="consult-data-text">
        <h1>Vous avez une question ? Contactez Nous.</h1>
    </div>
    <div class="consult-data-button">
        <a href="nousContactez.php"> <div id="btn"><span class="noselect">Contactez-nous</span><div id="circle"></div></div></a>
    </div>

</div>
<?php  include "footer.php"; ?>

</body>
</html>