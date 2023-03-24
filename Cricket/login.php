<?php

require 'include/database.php';

$conn = getDB();

//get user input from form
$username = $_POST['username'];
$password = $_POST['password'];

//hash password
$hashed_password = hash('sha256', $password);

//query database to check if user exists
$sql = "SELECT * FROM clients WHERE username = '$username' AND password = '$hashed_password'";
$result = mysqli_query($conn, $sql);

//if user exists, authenticate and redirect to home page
if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
} else {
    echo "Invalid username or password. $username $hashed_password";
}

mysqli_close($conn);
?>