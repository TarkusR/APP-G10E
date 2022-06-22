<?php
//Database connection.
define('DB_SERVER', 'herogu.garageisep.com');
define('DB_USERNAME', 'mX9Rm4LPla_infinite_g');
define('DB_PASSWORD', 'nWWkuPe1p5xajcco');
define('DB_NAME', 'GpyQOrqTrS_infinite_g');

$con = MySQLi_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Check connection
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}

require_once "insertDataScript.php";

if (isset($_POST['search'])) {

    $Name = $_POST['search'];

    $Query = "SELECT name,firstName,idUser FROM utilisateur WHERE name LIKE '$Name%' LIMIT 5";

    $ExecQuery = MySQLi_query($con, $Query);

    echo '
<ul>
   ';

    while ($Result = MySQLi_fetch_array($ExecQuery)) {
        ?>

        <li class="search-bar-result" onclick='fill("<?php echo $Result['name']." ".$Result['firstName']; ?>")'>
            <a href="adminAccountViewer.php?id=<?= $Result['idUser'] ?>" class="search-bar-result">
                <?php echo $Result['name']." ".$Result['firstName']; ?>
        </li></a>

        <?php
    }}
?>
</ul>