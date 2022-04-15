<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <title>Mon Compte</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="accueil">
<div>
<h1>Information de compte</h1>
    <?php
    echo '<p> Votre Nom : '.$_SESSION['name'].'</p>';
    echo '<p> Votre prenom : '.$_SESSION['firstName'].'</p>';
    echo '<p> Numero de téléphone : +33'.$_SESSION['phoneNumber'].'</p>';
    echo '<p> Date de naissance : '.date_format(date_create($_SESSION['dateNaissance']), 'd/m/Y').'</p>';
    echo '<p> Sexe : '.$_SESSION['sex'].'</p>';

    ?>
</div>
</body>
<?php
include_once "footer.php"
?>