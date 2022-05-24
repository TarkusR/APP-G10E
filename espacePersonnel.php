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
        <title>Espace Personnel</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
<body>
<?php  include "header.php"; ?>

<h1 class="centreRegister">Espace personnel</h1>

<?php  include "footer.php"; ?>
</body>
</html>
