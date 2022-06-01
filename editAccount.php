<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION["loggedin"])){

}else{
    header("Location:index.php");
}
?>
<?php
include_once "header.php";
?>
<div class="edit-account-container">
    <form action=<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
        <h1>Modifier <?php
            if(true){

            }

            ?></h1>
    <div class="edit-form-text">
        <input type="text">
    </div>
        
    </form>
</div>
<?php
include_once "footer.php";
?>

</body>
</html>