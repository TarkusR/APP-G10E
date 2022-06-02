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
$id=$_GET['idAccount'];

if($id=!$_SESSION["id"]){
    if($_SESSION["admin"]!=1){
        header("Location : monCompte.php");
    }
}
?>
<?php
include_once "header.php";
?>
<div class="edit-account-container">

    <?php

    if ($_SESSION['admin'] == 1)
    {
        echo
        '<div class="edit-account-admin-container">
        <h1>Modifier le compte</h1>
        <a href="banAccount.php?id='.$_GET["idAccount"].'&edit='.$_GET["edit"].'"><button class="boutton-edit-account">Bannir le compte</button></a>
        </div>';
    }
    ?>

    <div class="edit-account-form-container">
    <form action="<?php  echo 'insertEdit.php?edit='.$_GET["edit"].'&idAccount='.$_GET["idAccount"].''; ?>">
        <h1>Modifier <?php
            if($_GET["edit"]=="name"){
                echo 'le nom';
            }elseif ($_GET["edit"]=="firstname"){
                echo 'le prenom';
            }elseif ($_GET["edit"]=="phoneNumber"){
                echo 'le numéro de téléphone';
            }elseif ($_GET["edit"]=="birthDate"){
                echo 'la date de naissance';
            }elseif ($_GET["edit"]=="sex"){
                echo 'le sexe';
            }elseif ($_GET["edit"]=="mail"){
                echo "l'adresse e-mail";
            }elseif ($_GET["edit"]=="password"){
                echo 'le mots de passe';
            }

            ?>



        </h1>
        <label for="form-input-edit"><?php
            if($_GET["edit"]=="name"){
                echo 'Nouveau nom';
            }elseif ($_GET["edit"]=="firstname"){
                echo 'Nouveau prenom';
            }elseif ($_GET["edit"]=="phoneNumber"){
                echo 'Nouveau numéro de téléphone';
            }elseif ($_GET["edit"]=="birthDate"){
                echo 'Nouvelle date de naissance';
            }elseif ($_GET["edit"]=="sex"){
                echo 'Nouveau sexe';
            }elseif ($_GET["edit"]=="mail"){
                echo "Nouvelle adresse e-mail";
            }elseif ($_GET["edit"]=="password"){
                echo 'Nouveau  mots de passe';
            } ?><br></label><?php if($_GET['edit']!="sex"){
               echo '<input class="InputRegister" type=';
               if($_GET["edit"]=="name"){
                echo 'text';
                }elseif ($_GET["edit"]=="firstname"){
                echo 'text';
                }elseif ($_GET["edit"]=="phoneNumber"){
                echo 'text';
                }elseif ($_GET["edit"]=="birthDate"){
                echo 'date';
                }elseif ($_GET["edit"]=="mail"){
                echo 'text';
                }elseif ($_GET["edit"]=="password"){
                echo 'text';
                }
                echo ' name="form-input-edit">';
        }else{
            echo '<br>
            <input  type="radio" name="sex" id="homme" value="homme" />
            <label for="homme">Homme</label>

            <input  type="radio" name="sex" id="femme" value="femme" />
            <label for="femme">Femme</label>

            <input type="radio" name="sex" id="unexpresed" value="unexpresed"/>
            <label for="unexpresed"> Ne préfère pas dire</label>';
        }?>
        <input style="display: none" type="text" name="edit" value=<?= $_GET['edit'] ?>>
        <input style="display: none" type="text" name="id" value=<?= $_GET['idAccount'] ?>>
    </div>
        <input class="boutton-edit-account" type="submit" value="Confirmer">
    </form>
    </div>
</div>
<?php
include_once "footer.php";
?>

</body>
</html>