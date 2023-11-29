<?php

function databaseConnection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "lumia";

    $conn = new mysqli($host,$username,$password,$database);

    if ($conn->connect_error){
        die("Connection killed" . $conn->connect_error);
    }
//    echo "Successfully connected";

    return $conn;

}
