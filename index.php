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
    
    <h1> <span>Bienvenue sur l'espace Care-Workplace </span> </h1>
    
    <?php  include "header.php"; ?>

</body>