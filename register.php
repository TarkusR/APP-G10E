<?php
// Include les fichiers de config pour login a la BDD
$link ="";
require_once "config.php";

// Definis les variables pour qu'elles soient vide
$username = $password = $confirm_password = $email= $tel = $nom = $prenom = $dateNai= $sex ="";
$username_err = $password_err = $confirm_password_err = $email_err = $tel_err = $nom_err = $prenom_err= $dateNai_err = $sex_err = "";
// On check la method de request pour savoir si le form a été submit
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Valide le nom de compte
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrer un nom d'utilisateurs.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Les noms d'utilisateurs ne peuvent contenir que des lettre des chiffre ou des tirets.";
    } else{
        // on prepare un select
        $sql = "SELECT idUser FROM utilisateur WHERE username = ?";



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

    // Validation de l'email
    if(empty(trim($_POST["email"]))){
        $email_err = "Entrer une adresse e-mail valide.";
    } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email_err = "Entrer une adresse e-mail valide..";
    } else{
        $email = trim($_POST["email"]);
    }

    // Validation du num de tel
    if(empty(trim($_POST["tel"]))){
        $tel_err = "Entrer un numéro de telephone valide.";
    } elseif(!preg_match("#[0][6-7][- \.?]?([0-9][0-9][- \.?]?){4}$#", $_POST["tel"])){
        $tel_err = "Entrer un numéro de telephone valide.";
    } else{
        $tel = trim($_POST["tel"]);
    }

    // Validation du prenom
    if(empty(trim($_POST["prenom"]))){
        $prenom_err = "Entrer un prenom valide.";
    } elseif(!preg_match("/[A-Za-z]+/",$_POST["prenom"])){
        $prenom_err = "Entrer un prenom valide.";
    } else{
        $prenom = trim($_POST["prenom"]);
    }

    // Validation du nom
    if(empty(trim($_POST["nom"]))){
        $nom_err = "Entrer un nom valide.";
    } elseif(!preg_match("/[A-Za-z]+/",$_POST["nom"])){
        $nom_err = "Entrer un nom valide.";
    } else{
        $nom = trim($_POST["nom"]);
    }

    // Validation de la date de naissance
    if(empty(trim($_POST["dateNai"]))){
        $dateNai_err = "Entrer une date de naissance.";
    }else{
        $dateNai = trim($_POST["dateNai"]);
    }

    // Validation du sexe
    if(empty($_POST["sex"])){
        $sex_err = "Entrer une date de naissance.";
    }else{
        $sex = trim($_POST["sex"]);
    }

    // Validation du mots de passe
    $maj = preg_match('@[A-Z]@', $_POST["password"]);
    $min = preg_match('@[a-z]@', $_POST["password"]);
    $number = preg_match('@[0-9]@', $_POST["password"]);

    if(empty(trim($_POST["password"]))){
        $password_err = "entrer un mot de passe.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Le mot de passe doit contenir plus de 6 caracteres.";
    } elseif(strlen(trim($_POST["password"])) > 32){
        $password_err = "Le mot de passe doit contenir moins de 32 caracteres.";
    } elseif(!$number || !$min || !$maj){
        $password_err = "Le mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre";
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

    // On verifie si les erreurs sont vide
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($tel_err) && empty($nom_err)){

        // on fait un insert
        $sql = "INSERT INTO utilisateur (username, password, mail, phoneNumber, name, firstName, dateNaissance, sex) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Lie les variables au requetes sql
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_username, $param_password, $param_email, $param_tel, $param_nom, $param_prenom, $param_dateNai, $param_sex);

            // recupere les parametres
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_ARGON2ID); // Creates a password hash
            $param_email = $email;
            $param_tel = $tel;
            $param_nom = $nom;
            $param_prenom = $prenom;
            $param_dateNai = $dateNai;
            $param_sex = $sex;

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
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="login">
<div class="registerContainer">

    <h2 style="animation: none">Inscription</h2>
    <p>Veuillez saisir les informations demandées</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="register-Flex-Container">
        <div class="centreRegister">
        <div >
            <label>Nom de compte : </label>
            <input class="InputRegister"  type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <p ><?php echo $username_err; ?></p>
        </div>
        <div >
            <label>E-mail :</label> <br>
            <input class="InputRegister" type="text" name="email" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
            <p ><?php echo $email_err; ?></p>
        </div>
        <div >
            <label>Numéro de téléphone :</label> <br>
            <input class="InputRegister" type="text" name="tel" <?php echo (!empty($tel_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tel; ?>">
            <p><?php echo $tel_err; ?></p>
        </div>
        <div >
            <label>Nom :</label> <br>
            <input class="InputRegister" type="text" name="nom" <?php echo (!empty($nom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
            <p><?php echo $nom_err; ?></p>
        </div>
        <div>
            <label>Prénom :</label> <br>
            <input class="InputRegister" type="text" name="prenom" <?php echo (!empty($prenom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $prenom; ?>">
            <p ><?php echo $prenom_err; ?></p>
        </div>

        </div>
        <div class="centreRegister">
        <div >
            <label>Date de naissance :</label> <br>
            <input class="InputRegister" type="date" name="dateNai" <?php echo (!empty($dateNai_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dateNai; ?>">
            <p><?php echo $dateNai_err; ?></p>
        </div>
        <div>
            <label>Sexe :</label> <br>
            <input  type="radio" name="sex" id="homme" value="homme" />
            <label for="homme">Homme</label>

            <input  type="radio" name="sex" id="femme" value="femme" />
            <label for="femme">Femme</label>

            <input type="radio" name="sex" id="unexpresed" value="unexpresed"/>
            <label for="unexpresed"> Ne préfère pas dire</label>
        </div>

    <br>
        <div >
            <label>Mots de passe :</label> <br>
            <input class="InputRegister" type="password" name="password"  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <p><?php echo $password_err; ?></p>
        </div>
        <div >
            <label>Confirmez le mots de passe :</label> <br>
            <input class="InputRegister" type="password" name="confirm_password" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <p><?php echo $confirm_password_err; ?></p>
        </div>
        </div>
        </div>
        <div class="centreRegister-button">
            <input class="boutonRegister" type="submit" value="Confirmer">
            <input class="boutonRegister" type="reset"  value="Reinitialiser">
            <p>Possédez-vous déjà un compte ? <a href="login.php" class="seconnecterRegister">Connectez-vous ici</a></p>
        </div>
    </form>
</form>
</div>
</body>
</html>