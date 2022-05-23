<?php
//Database connection.
$con = MySQLi_connect(
    "localhost", //Server host name.
    "root", //Database username.
    "", //Database password.
    "bdd" //Database name
);
//Check connection
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}



if (isset($_POST['search'])) {

    $Name = $_POST['search'];

    $Query = "SELECT name,firstName FROM utilisateur WHERE name LIKE '$Name%' LIMIT 5";

    $ExecQuery = MySQLi_query($con, $Query);

    echo '
<ul>
   ';

    while ($Result = MySQLi_fetch_array($ExecQuery)) {
        ?>

        <li class="search-bar-result" onclick='fill("<?php echo $Result['name']." ".$Result['firstName']; ?>")'>
            <a class="search-bar-result">
                <?php echo $Result['name']." ".$Result['firstName']; ?>
        </li></a>

        <?php
    }}
?>
</ul>