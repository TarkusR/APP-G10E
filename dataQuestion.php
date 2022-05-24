<?php
header('Content-Type: application/json');
session_start();

$date = date("Y-m-d");
$idUser = '';
//database
define('DB_HOST', 'herogu.garageisep.com');
define('DB_USERNAME', 'mX9Rm4LPla_infinite_g');
define('DB_PASSWORD', 'nWWkuPe1p5xajcco');
define('DB_NAME', 'GpyQOrqTrS_infinite_g');


$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
    die("Connection failed: " . $mysqli->error);
}


$query = sprintf('SELECT idQuestion,text FROM question ORDER BY timeStampe ');


$result = $mysqli->query($query);


$question = array();
foreach ($result as $row) {
    $question[] = $row;
}


$result->close();



$mysqli->close();


print json_encode($question);
?>