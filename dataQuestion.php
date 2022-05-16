<?php
header('Content-Type: application/json');
session_start();

$date = date("Y-m-d");
$idUser = '';
//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bdd');


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