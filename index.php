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

</body>