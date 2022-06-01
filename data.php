<?php
header('Content-Type: application/json');
session_start();

$date = date("Y-m-d");

//database
define('DB_HOST', 'herogu.garageisep.com');
define('DB_USERNAME', 'mX9Rm4LPla_infinite_g');
define('DB_PASSWORD', 'nWWkuPe1p5xajcco');
define('DB_NAME', 'GpyQOrqTrS_infinite_g');


//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}


$query = sprintf('SELECT donnee, heure FROM data WHERE idUSER = '.$_SESSION["id"].' AND jour <= "'. $date .'" AND sensorType = "temperature" ORDER BY heure ');

//execute query
$result = $mysqli->query($query);


$data = array();
foreach ($result as $row) {
    $data[] = $row;
}


$result->close();


$mysqli->close();


print json_encode($data);
?>