<?php 
    // This file contains database configuration

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'rental');

    // try connecting to the database
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //check the connection
    if ($con == false) {
        die('error: cannot connect');
    }
?>