<?php
    // use config.php to connect to database
    require_once("config.php");
    // start session
    session_start();

    // check for exisiting user session
    if (isset($_SESSION['user'])) {
        // redirect to home page
        header("Location: index.php");
    }

    // get form data for firstname, lastname, username, password and sanitize
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to the database
    $connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

    // check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // check if username already exists
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connection->query($sql);

    // sanitize the data
    $firstname = $connection->real_escape_string($firstname);
    $lastname = $connection->real_escape_string($lastname);
    $username = $connection->real_escape_string($username);
    $password = $connection->real_escape_string($password);
    
    // if username already exists
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connection->query($sql);

    if($result->num_rows > 0) {
        // username already exists
        echo "Username '.$username.' already exists.  Please choose a different username.";
    }
    else {
        //username does not exists, insert the new user and sanitize the data
        $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$password')";
    }
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
        // redirect to the login page
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    //close connection
    $connection->close();


?>