<?php
session_start();
$link ="";
include_once "config.php";
if($_GET["id"] == $_SESSION["id"]){
    if(empty($_GET['id']) || empty($_GET['form-input-edit'])){
        header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["idAccount"].'');
    }
    if($_GET['edit']=="name"){
        $sql = "DELETE FROM utilisateur where idUser = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"s",$_GET["idAccount"]);
            if(mysqli_stmt_execute($stmt)){
                header("Location: monCompte.php?success=true");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}elseif ($_SESSION["admin"]==1){
    if(empty($_GET['id']) || empty($_GET['form-input-edit'])){
        header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["idAccount"].'');
    }
    if($_GET['edit']=="name"){
        $sql = "DELETE FROM utilisateur where idUser = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"s",$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                header("Location: monCompte.php?success=true");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}elseif(empty($_GET['form-input-edit']) || empty($_GET['idAccount']) ){
    header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["idAccount"].'');
}else{
    header('Location:index.php');
}
