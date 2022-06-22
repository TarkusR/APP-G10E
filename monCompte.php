<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <title>Mon Compte</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<?php
require "insertDataScript.php";
?>

<body class="accueil">
<?php
include_once "header.php"
?>
<div class="account-container">
<div class="account-descriptor-container">
    <div class="account-descriptor-text">
        <h1>Information de compte</h1>
            <?php
            if($_SESSION['admin']==1){
                echo '<div class="account-descriptor-title"><p> Votre Nom :</p><p class="account-descriptor-usable">'.$_SESSION['name'].'</p>&nbsp<a href="editAccount.php?edit=name&idAccount='.$_SESSION['id'].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Votre prenom :</p><p class="account-descriptor-usable">'.$_SESSION['firstName'].'</p>&nbsp<a href="editAccount.php?edit=firstName&idAccount='.$_SESSION['id'].'"><p style="text-align: right; font-weight: bold ">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Numéro de telephone :</p><p class="account-descriptor-usable">+33'.$_SESSION['phoneNumber'].'</p>&nbsp<a href="editAccount.php?edit=phoneNumber&idAccount='.$_SESSION['id'].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Date de naissance :</p><p class="account-descriptor-usable">'.$_SESSION['dateNaissance'].'</p>&nbsp<a href="editAccount.php?edit=birthDate&idAccount='.$_SESSION['id'].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
                echo '<div class="account-descriptor-title"><p> Sexe :</p><p class="account-descriptor-usable">'.$_SESSION['sex'].'</p>&nbsp<a href="editAccount.php?edit=sex&idAccount='.$_SESSION['id'].'"><p style="text-align: right; font-weight: bold">Modifier</p></a></div>';
            } else{
                echo '<div class="account-descriptor-title"><p> Votre Nom :</p><p class="account-descriptor-usable">'.$_SESSION['name'].'</p></div><p>ui</p>';
                echo '<div class="account-descriptor-title"><p> Votre prenom :</p><p class="account-descriptor-usable">'.$_SESSION['firstName'].'</p></div>';
                echo '<div class="account-descriptor-title"><p> Numéro de telephone :</p><p class="account-descriptor-usable">+33'.$_SESSION['phoneNumber'].'</p></div>';
                echo '<div class="account-descriptor-title"><p> Date de naissance :</p><p class="account-descriptor-usable">'.$_SESSION['dateNaissance'].'</p></div>';
                echo '<div class="account-descriptor-title"><p> Sexe :</p><p class="account-descriptor-usable">'.$_SESSION['sex'].'</p></div>';
            }
            echo '<div class="account-descriptor-title"><p> Adresse E-mail :</p><p class="account-descriptor-usable">'.$_SESSION['mail'].'</p>&nbsp<a href="editAccount.php?edit=mail&idAccount='.$_SESSION['id'].'"><p style="text-align: right;font-weight: bold ">Modifier</p></a></div>';
            echo '<div class="account-descriptor-title"><p> Mots de passe :</p><p class="account-descriptor-usable"> ********</p>&nbsp<a href="editAccount.php?edit=password&idAccount='.$_SESSION['id'].'"><p style="text-align: right;font-weight: bold ">Modifier</p></a></div>';

            if($_SESSION['admin']==1){
                echo '<div class="account-descriptor-title"><p>Compte : </p><p class="account-descriptor-usable" style="color: red"> Admin </p></div>';
            } else{
                echo '<div class="account-descriptor-title"><p>Compte : </p><p class="account-descriptor-usable"> Utilisateur </p></div>';
            }
            ?>
    </div>
    <div class="account-data-container">
        <div class="chart-container">

            <a href="monCompte.php?graph=temp"><button>Temperature</button></a>
            <a href="monCompte.php?graph=c02"><button>C02</button></a>
            <a href="monCompte.php?graph=card"><button>Capteur cardiaque</button></a>

            <?php
            if(isset($_GET['graph']))
            {
                if($_GET['graph']=='c02')
                {
                    echo'<canvas id="mycanvas2" width="400" height="250"></canvas>';

                }elseif ($_GET['graph']=='temp')
                {
                    echo '<canvas id="mycanvas" width="400" height="250"></canvas>';

                }elseif($_GET['graph']=='card')
                {
                    echo '<canvas id="mycanvas3" width="400" height="250"></canvas>';

                }else
                {
                    echo '<canvas id="mycanvas" width="400" height="250"></canvas>';

                }
            }else
            {
                echo '<canvas id="mycanvas" width="400" height="250"></canvas>';

            }

            ?>

        </div>


        <!-- javascript -->
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/chart.min.js"></script>
        <?php
        if(isset($_GET['graph']))
        {
            if($_GET['graph']=='c02')
            {
                echo'<script type="text/javascript" src="js/app2.js"></script>';

            }elseif ($_GET['graph']=='temp')
            {
                echo '<script type="text/javascript" src="js/app.js"></script>';
            }elseif($_GET['graph']=='card')
            {
                echo '<script type="text/javascript" src="js/app3.js"></script>';

            }else
            {
                echo '<script type="text/javascript" src="js/app.js"></script>';

            }
        }else
        {
            echo '<script type="text/javascript" src="js/app.js"></script>';
        }

        ?>

    </div>
</div>

    <?php
    if($_SESSION['admin']==1){
        if(isset($_GET["success"])){
            $ban = '<h2 style="color: red; animation: none">Compte banni avec succès</h2>';
        }else{
            $ban='';
        }
        echo '
        <div class="admin-search-bar-container">
        '.$ban.'
            <div><h1>Rechercher un utilisateur</h1></div>
                <div class="form-group field">
                    <script type="text/javascript" src="js/script.js"></script>
                    <input class="search-bar" autocomplete="off" type="text" id="search" placeholder="Recherche" />
                    <label class="form-label" for="search">Recherche</label>
                    <div class="search-bar-result" id="display"></div>
                </div>
    </div>';
    } else{

    }
    ?>

</div>
</body>
<?php
include_once "footer.php"
?>