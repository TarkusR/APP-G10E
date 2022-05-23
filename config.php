<?php
/* Données de login pour la base de données */
define('DB_SERVER', 'herogu.garageisep.com');
define('DB_USERNAME', 'mX9Rm4LPla_infinite_g');
define('DB_PASSWORD', 'nWWkuPe1p5xajcco');
define('DB_NAME', 'GpyQOrqTrS_infinite_g');

/* Connexion */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // test connexion
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

?>