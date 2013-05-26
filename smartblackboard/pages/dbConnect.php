<?php
function connect() {
    $host = "localhost"; // Host name
    $username = "root";      // Mysql username
    $password = "root";           // Mysql DateOrdered
    $db_name = "smartblackboard"; // Database names
    // Connect to server and select databse.
    $con = null;
    $con = mysql_connect($host, $username, $password) or die(mysql_error());
    if ($con != null)
        mysql_select_db($db_name) or die("Db Cannot be selected ". mysql_error()); ;
    
    return $con;
}

?>
