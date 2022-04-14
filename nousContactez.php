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
    <div class="">
    <div class="centreRegister">
    <label>Objet du message :</label>
    <input class="InputContact" type="text">
    </div>
        <p> Votre message : </p>
        <textarea rows="10" placeholder="Exprimez-vous" class="textContact"> </textarea>
    <div class="centreRegister">
        <button class="boutonConnexion">Envoyer</button>
    </div>
    </div>
    <?php include_once "footer.php" ?>
    </body>
</html>