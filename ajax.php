<?php
//Including Database configuration file.


//Database connection.
$con = MySQLi_connect(
    "localhost", //Server host name.
    "root", //Database username.
    "", //Database password.
    "bdd" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}



//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
    $Name = $_POST['search'];
//Search query.
    $Query = "SELECT name,firstName FROM utilisateur WHERE name LIKE '$Name%' LIMIT 5";
//Query execution
    $ExecQuery = MySQLi_query($con, $Query);
//Creating unordered list to display result.
    echo '
<ul>
   ';
    //Fetching result from database.
    while ($Result = MySQLi_fetch_array($ExecQuery)) {
        ?>
        <!-- Creating unordered list items.
             Calling javascript function named as "fill" found in "script.js" file.
             By passing fetched result as parameter. -->
        <li class="search-bar-result" onclick='fill("<?php echo $Result['name']." ".$Result['firstName']; ?>")'>
            <a class="search-bar-result">
                <!-- Assigning searched result in "Search box" in "search.php" file. -->
                <?php echo $Result['name']." ".$Result['firstName']; ?>
        </li></a>
        <!-- Below php code is just for closing parenthesis. Don't be confused. -->
        <?php
    }}
?>
</ul>