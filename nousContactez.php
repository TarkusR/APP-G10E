<?php
session_start();
if(isset($_SESSION["loggedin"])){

} else{
    header('Location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Nous Contacter</title>
    <link rel="stylesheet" href="style/style.css" >

</head>
    <body>
    <?php  include "header.php"; ?>


    <?php include_once "footer.php" ?>
    </body>
</html>