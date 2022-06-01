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



$query = sprintf('SELECT donnee, heure FROM data WHERE IDUser = '.$_SESSION["id"].' AND sensorType = "cardiaque" ORDER BY heure ');

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

?>