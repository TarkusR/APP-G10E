<html>
<head>
<title>Creation de la table</title>
</head>
<body>
<?php
   session_start();
if(isset($_SESSION["loggedin"])){
$host = "Votre serveur de base de données";
$user = "Votre nom d'utilisateur";
$password = "Votre mot de passe";
$bdd = "Votre base de données sur le serveur";
mysql_connect($host, $user, $password) or die ("Connexion au serveur impossible");
// on choisit la bonne base
mysql_select_db($bdd) or die ("Connexion a la base impossible");
$query = "CREATE TABLE search (
   lien varchar(128) NOT NULL,
   keyword text,
   titre varchar(128),
   id INT(11),
   PRIMARY KEY (id)
)";
mysql_query($query) or die ("Erreur de modification de  la table");
// on ferme la base
mysql_close();
} else{
    header('Location:login.php');
    exit();
}   
?>
</body>
</html>
