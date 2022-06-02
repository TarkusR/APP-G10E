<?php
session_start();
$link="";
include_once "config.php";
?>

<!DOCTYPE html>

<head>
    <title>Mon Compte</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body class="accueil">
<?php
include_once "header.php";

if($id=!$_SESSION["id"]){
    if($_SESSION["admin"]!=1){
        header("Location : monCompte.php");
    }
}
$admin = $mail = $phoneNumber = $firstName = $dateNaissance = $sex = $name ="";

    $sql = "SELECT admin, mail, phoneNumber, firstName, name, dateNaissance, sex FROM utilisateur WHERE idUser = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $_GET["id"]);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $admin, $mail, $phoneNumber, $firstName,$name, $dateNaissance, $sex);
                if(mysqli_stmt_fetch($stmt)){
                }
            }
        } else {
            echo "c'est casser";
        }
        mysqli_stmt_close($stmt);
    }
if(empty($sex)){
    $sex="non prononcé";
}
?>
<div class="account-container">
    <div class="account-descriptor-container-admin">
        <div class="account-descriptor-text">
            <h1>Information de compte</h1>
            <?php
                echo '<div class="account-descriptor-title"><p> Votre Nom :</p><p class="account-descriptor-usable">'.$name.'</p>&nbsp<a href="editAccount.php?edit=name&idAccount='.$_GET["id"].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Votre prenom :</p><p class="account-descriptor-usable">'.$firstName.'</p>&nbsp<a href="editAccount.php?edit=firstName&idAccount='.$_GET["id"].'"><p style="text-align: right; font-weight: bold ">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Numéro de telephone :</p><p class="account-descriptor-usable">+33'.$phoneNumber.'</p>&nbsp<a href="editAccount.php?edit=phonenUmber&idAccount='.$_GET["id"].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Date de naissance :</p><p class="account-descriptor-usable">'.$dateNaissance.'</p>&nbsp<a href="editAccount.php?edit=birthDate&idAccount='.$_GET["id"].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Sexe :</p><p class="account-descriptor-usable">'.$sex.'</p>&nbsp<a href="editAccount.php?edit=sex&idAccount='.$_GET["id"].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Adresse E-mail :</p><p class="account-descriptor-usable">'.$mail.'</p>&nbsp<a href="editAccount.php?edit=mail&idAccount='.$_GET["id"].'"><p style="text-align: right;font-weight: bold ">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Mots de passe :</p><p class="account-descriptor-usable"> ********</p>&nbsp<a href="editAccount.php?edit=password&idAccount='.$_GET["id"].'"><p style="text-align: right;font-weight: bold ">Modifier</p></a></div>';
                if($admin==1){
                    echo '<div class="account-descriptor-title"><p>Compte : </p><p class="account-descriptor-usable" style="color: red"> Admin </p></div>';
                } else{
                    echo '<div class="account-descriptor-title"><p>Compte : </p><p class="account-descriptor-usable"> Utilisateur </p></div>';
                }
                ?>
        </div>
    </div>

</div>
</body>
<?php
include_once "footer.php"
?>
