<?php

//start session
session_start();

//require config.php
require_once("config.php");

//check if user session exists
if (!isset($_SESSION['user'])) {
    //check if the session cookie exists
    if(!isset($_COOKIE['session']) || !preg_match('/^session_[a-z0-9]+_[a-z0-9]+$/i', $_COOKIE['session'])) {
        //redirect to login page
        header("Location: login.html");
        exit(); // exit the script to prevent further execution
    } else {
        // set the session ID to the value of the session cookie
        session_id(substr($_COOKIE['session'], 8)); // ignore the "session_" prefix
        session_start(); // start the session with the ID from the cookie
    } 

    //redirect to login page
    header("Location: login.html");
    exit(); // exit the script to prevent further execution
}

//get form data for sessionstart, sessionend, ballsbowled, ballshit and sanitize
$sessionstart = $_POST['session_start'];
$sessionend = $_POST['session_end'];
$ballsbowled = $_POST['balls_bowled'];
$ballshit = $_POST['balls_hit'];
$username = $_SESSION['user'];

//connect to the database
$connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

//check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//prepare the query to get user ID
$sql = "SELECT user_id FROM users WHERE username = '$username'";

//execute the query to get user ID
$result = $connection->query($sql);

//check if query was successful
if ($result && $result->num_rows > 0) {
    //query was successful
    $row = $result->fetch_assoc();
    $user_id = $row['user_id'];

    //prepare the query to insert session data
    $sql = "INSERT INTO sessions (session_start, session_end, balls_bowled, balls_hit, user_id) VALUES ('$sessionstart', '$sessionend', '$ballsbowled', '$ballshit', '$user_id')";

    //execute the query to insert session data
    if ($connection->query($sql) === TRUE) {
        echo "Session data inserted successfully";
        //return a 200 OK response code to indicate success
        http_response_code(200);
        //redirect to the index.php page
        header("Location: index.php");

    } else {
        echo "Error inserting session data: " . $connection->error;
    }
} else {
    //query to get user ID was unsuccessful
    $error = "User ID not found";
}

//close the statement
$result->close();

//close connection
$connection->close();

?>
