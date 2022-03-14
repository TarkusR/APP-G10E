<?php
// Include les fichiers de config pour login a la BDD
require_once "config.php";

// Definis les variables pour qu'elles soient vide
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// On check la method de request pour savoir si le form a été submit
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Valide le nom de compte
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrer un nom d'utilisateurs.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Les noms d'utilisateurs ne peuvent contenir que de lettre des chiffre ou des tirets.";
    } else{
        // on prepare un select
        $sql = "SELECT id FROM users WHERE username = ?";


        if($stmt = mysqli_prepare($link, $sql)){
            // Lie les variables au requetes sql
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Mets le username dans le parametre
            $param_username = trim($_POST["username"]);

            // on tente d'executer la requete
            if(mysqli_stmt_execute($stmt)){
                /* On enregistre le resultat */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ce nom d'utilisateurs est deja utilisés.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "c'est casser :(.";
            }

            // On ferme la connexion
            mysqli_stmt_close($stmt);
        }
    }

    // Validation du mots de passe
    if(empty(trim($_POST["password"]))){
        $password_err = "entrer un mots de passe.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Le mots de passe doit contenir 6 caractere.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validation de la confirmation du mots de passe
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirmer le mots de passe";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Les mots de passe ne correspondent pas.";
        }
    }

    // On verifie si les input sont pas vide
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // on fait un insert
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Lie les variables au requetes sql
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // recupere les parametre
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_ARGON2ID); // Creates a password hash

            // On execute une premiere fois la requete
            if(mysqli_stmt_execute($stmt)){
                // on redirige vers le login
                header("location: login.php");
            } else{
                echo "C'est casser :( .";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close Connexion
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S'enregistrer</title>
</head>
<body>
<div>
    <h2>S'Enregistrer</h2>
    <p>Remplissez ce formulaire pour vous inscrire.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div >
            <label>Nom de compte</label>
            <input type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span ><?php echo $username_err; ?></span>
        </div>
        <div >
            <label>Mots de passe</label>
            <input type="password" name="password"  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span ><?php echo $password_err; ?></span>
        </div>
        <div >
            <label>Confirmer mots de passe</label>
            <input type="password" name="confirm_password" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span ><?php echo $confirm_password_err; ?></span>
        </div>
        <div >
            <input type="submit" value="Confirmer">
            <input type="reset"  value="Reinitialiser">
        </div>
        <p>Vous posseder deja un compte ? <a href="login.php">Se connecter</a>.</p>
    </form>
</div>
</body>
</html>