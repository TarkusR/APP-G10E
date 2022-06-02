<?php
session_start();
$link ="";
include_once "config.php";
if($_GET["id"] == $_SESSION["id"]){
    if(empty($_GET['form-input-edit'])){
        header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["id"].'');
    }
    if($_GET['edit']=="name"){
        $sql = "UPDATE utilisateur SET name = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="firstname"){
        $sql = "UPDATE utilisateur SET firstName = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['firstName']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="phoneNumber"){
        $sql = "UPDATE utilisateur SET phoneNumber = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="birthDate"){
        $sql = "UPDATE utilisateur SET dateNaissance = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="sex"){
        $sql = "UPDATE utilisateur SET sex = ? WHERE IDUser =?";
        if(empty($_GET['sex'])){
            header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["id"].'');
        }
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["sex"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="mail"){
        $sql = "UPDATE utilisateur SET mail = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="password"){
        $sql = "UPDATE utilisateur SET password = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            $password_hash = password_hash($_GET["form-input-edit"], PASSWORD_ARGON2ID);
            mysqli_stmt_bind_param($stmt,"ss", $password_hash,$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}elseif ($_SESSION["admin"]==1){
    if(empty($_GET['form-input-edit'])){
        header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["id"].'');
    }
    if($_GET['edit']=="name"){
        $sql = "UPDATE utilisateur SET name = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['name']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="firstname"){
        $sql = "UPDATE utilisateur SET firstName = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['firstName']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="phoneNumber"){
        $sql = "UPDATE utilisateur SET phoneNumber = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['phoneNumber']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="birthDate"){
        $sql = "UPDATE utilisateur SET dateNaissance = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['dateNaissance']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="sex"){
        $sql = "UPDATE utilisateur SET sex = ? WHERE IDUser =?";
        if(empty($_GET['sex'])){
            header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["id"].'');
        }
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["sex"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['sex']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="mail"){
        $sql = "UPDATE utilisateur SET mail = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"ss",$_GET["form-input-edit"],$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['mail']=$_GET["form-input-edit"];
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }elseif ($_GET['edit']=="password"){
        $sql = "UPDATE utilisateur SET password = ? WHERE IDUser =?";

        if($stmt = mysqli_prepare($link, $sql)){
            $password_hash = password_hash($_GET["form-input-edit"], PASSWORD_ARGON2ID);
            mysqli_stmt_bind_param($stmt,"ss", $password_hash,$_GET["id"]);
            if(mysqli_stmt_execute($stmt)){
                header("Location: monCompte.php");
            }else{
                echo"c'est casser";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}elseif(!isset($_GET['form-input-edit'])){
    header('Location:editAccount.php?edit='.$_GET["edit"].'&idAccount='.$_GET["id"].'');
}else{
    header('Location:index.php');
}


