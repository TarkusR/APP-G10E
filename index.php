<?php

session_start();
if(isset($_GET['logout']))
    session_destroy();
?>
<?php  include('header.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="accueil">
<h1 class="centreRegister">Bienvenue sur l'espace Care-Workplace</h1>
<p> Vous pouvez retrouver toutes les informations concernant notre produit et vos données en vous connectant avec votre compte Care-tech</p>
</body>
<?php include_once "footer.php" ?>
</html>
