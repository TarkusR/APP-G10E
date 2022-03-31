<?php
// Creer la session
session_start();

// Verifie si l'utilisateur est deja login
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

// On recupere la config
require_once "config.php";

// Definition des variabless
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Check le type de method pour voir si le form a été submit
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // On check si le nom d'utilisateur est vide
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrer le nom de compte.";
    } else{
        $username = trim($_POST["username"]);
    }

    // On check si le mots de passe est vide
    if(empty(trim($_POST["password"]))){
        $password_err = "Entrer le mots de passe.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validation des données de login
    if(empty($username_err) && empty($password_err)){
        // on prepare un select
        $sql = "SELECT idUser , username, password FROM utilisateur WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Lie les parametres a la requetes
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Mets a jour les parametres vides
            $param_username = $username;

            // Premiere execution
            if(mysqli_stmt_execute($stmt)){
                // Stock les resultats
                mysqli_stmt_store_result($stmt);

                // Verifie si le nom de compte existe
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // lie les resultats a la variable
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                    if(mysqli_stmt_fetch($stmt)){
                        echo $password;
                        if(password_verify($password, $hashed_password)){
                            // Si le mots de passe est correct on lance une session
                            session_start();

                            // on stocke les données dans le tableau de session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            //$_SESSION["phone"]

                            // Redirige vers la page d'acceuil
                            header("location: index.php");
                        } else{
                            // si le mots de passe est invalid on display une erreur
                            $login_err = "Mots de passe ou nom d'utilisateur incorrect.";
                        }
                    }
                } else{

                    // si le nom d'utilisateur existe on display une erreur
                    $login_err = "Mots de passe ou nom d'utilisateur incorrect.";
                }
            } else{
                echo "C'est cassé :(";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">


    
<div class="registerContainer">

    <div class = "centreRegister">
        <img width="150 px" height="150 px"  src="logomeasure.png">
    <h2>Connexion</h2>
    <p>Entrez données.</p>

    <?php
    if(!empty($login_err)){
        echo '<div>' . $login_err . '</div>';
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div >
            <div>
                <label>Nom de compte</label> <br>
                <input class="InputRegister" type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span><?php echo $username_err; ?></span>
            </div>
            <div >
                <label>Mots de passe</label> <br>
                <input class="InputRegister" type="password" name="password"  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span ><?php echo $password_err; ?></span>
            </div>
            <div >
                <input class="boutonRegister" type="submit"  value="Login">
            </div>

        <p>Pas de compte ? <a class="seconnecterRegister" href="register.php">Enregistrez vous maintenant </a></p>
        </div>


    </form>
    </div>
</body>
</html>
