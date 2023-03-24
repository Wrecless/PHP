<?php

function getDB()
{
    //connect to database
    $servername = "localhost";
    $username = "bd_test";
    $password = "test";
    $dbname = "cricket_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}