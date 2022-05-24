<?php
session_start();

?>
<?php

define('DB_SERVER', 'herogu.garageisep.com');
define('DB_USERNAME', 'mX9Rm4LPla_infinite_g');
define('DB_PASSWORD', 'nWWkuPe1p5xajcco');
define('DB_NAME', 'GpyQOrqTrS_infinite_g');
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}
$query = sprintf('SELECT question,reponse FROM FAQQuestion WHERE IDQuestion = 1');
$result = $mysqli->query($query);
$question = array();
foreach ($result as $row) {
    $question[] = $row;
}
$question6=$row['question'];
$reponse6=$row['reponse'];

$query = sprintf('SELECT question,reponse FROM FAQQuestion WHERE IDQuestion = 2');
$result = $mysqli->query($query);
$question = array();
foreach ($result as $row) {
    $question[] = $row;
}
$question1=$row['question'];
$reponse1=$row['reponse'];

$query = sprintf('SELECT question,reponse FROM FAQQuestion WHERE IDQuestion = 3');
$result = $mysqli->query($query);
$question = array();
foreach ($result as $row) {
    $question[] = $row;
}
$question2=$row['question'];
$reponse2=$row['reponse'];

$query = sprintf('SELECT question,reponse FROM FAQQuestion WHERE IDQuestion = 4');
$result = $mysqli->query($query);
$question = array();
foreach ($result as $row) {
    $question[] = $row;
}
$question3=$row['question'];
$reponse3=$row['reponse'];


$query = sprintf('SELECT question,reponse FROM FAQQuestion WHERE IDQuestion = 5');
$result = $mysqli->query($query);
$question = array();
foreach ($result as $row) {
    $question[] = $row;
}
$question4=$row['question'];
$reponse4=$row['reponse'];

$query = sprintf('SELECT question,reponse FROM FAQQuestion WHERE IDQuestion = 6');
$result = $mysqli->query($query);
$question = array();
foreach ($result as $row) {
    $question[] = $row;
}
$question5=$row['question'];
$reponse5=$row['reponse'];
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
        <?php
        echo "<p class='faq-heading'>$question1</p>";
        ?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'>$reponse1</p>";
        ?>
    </label>
    <input id='faq-b' type='checkbox'>
    <label for='faq-b'>
        <?php
        echo "<p class='faq-heading'>$question2</p>";
        ?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'>$reponse2</p>";
        ?></label>
    <input id='faq-c' type='checkbox'>
    <label for='faq-c'>
        <?php
        echo "<p class='faq-heading'>$question3</p>";
        ?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'>$reponse3</p>";
        ?></label>
    <input id='faq-d' type='checkbox'>
    <label for='faq-d'>
        <?php
        echo "<p class='faq-heading'>$question4</p>";
        ?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'>$reponse4</p>";
        ?></label>
    <input id='faq-e' type='checkbox'>
    <label for='faq-e'>
        <?php
        echo "<p class='faq-heading'>$question5</p>";
        ?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'>$reponse5</p>";
        ?></label></label>
    <input id='settings' type='checkbox'>
    <input id='faq-f' type='checkbox'>
    <label for='faq-f'>
        <?php
        echo "<p class='faq-heading'>$question6</p>";?>
        <div class='faq-arrow'></div>
        <?php
        echo "<p class='faq-text'>$reponse6</p></label></label>";?>

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