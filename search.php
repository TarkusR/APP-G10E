<html>
<head>
<title>Creation de la table</title>
</head>
<body>
<?php
   session_start();
if(isset($_SESSION["loggedin"])){
   define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bdd');
$host = "localhost";
$user = "root";
$password = "";
$bdd = "bdd";
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
