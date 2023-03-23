<?php

/**
 * Get a database connection
 *
 * @return mysqli
 */

function getDB()
{
    $db_host = "localhost";
    $db_name = "cms";
    $db_user = "cms_www";
    $db_pass = "*n4Sk!O2rp59uxgp";

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    return $connection;
}