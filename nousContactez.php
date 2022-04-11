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

    <title>Nous Contactez</title>
    <link rel="stylesheet" href="style.css" >

</head>
    <body>
    <?php  include "header.php"; ?>

        <h1 class>Vous pouvez nous contactez en remplissant les informations ci-dessous :</h1>
    <label>Objet du message :</label>
    <input class="" type="text">



    <?php include_once "footer.php" ?>
    </body>
</html>