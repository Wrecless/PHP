<?php

class Database
{
    public function getConn()
    {
        $db_host = "localhost";
        $db_name = "cms";
        $db_user = "cms_w";
        $db_pass = "64w6H2rOJ1zwLRyk";

        $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

        try {
                return new PDO($dsn, $db_user, $db_pass);

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $db;
        }
        catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                exit;
        }
    }
}