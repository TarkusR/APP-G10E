<?php

session_start();
if(isset($_GET['logout']))
    session_destroy();
?>

<!DOCTYPE html>

<head>
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="accueil">
<?php  include "header.php"; ?>
<h1 class="centreRegister">Bienvenue sur l'espace Care-Workplace</h1>
<p> Vous pouvez retrouver toutes les informations concernant notre produit et vos données en vous connectant avec votre compte Care-tech</p>


<?php include_once "footer.php" ?>
</body>


