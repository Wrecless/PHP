<?php

require 'include/database.php';

$conn = getDB();

//get user input from form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//hash password
$hashed_password = hash('sha256', $password);

//check if username or email already exists in database
$sql = "SELECT * FROM clients WHERE username = '$username' OR email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Username or email already exists.";
} else {
    //insert user into database
    $sql = "INSERT INTO clients (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>