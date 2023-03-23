<?php
    //start session
    session_start();

    //check for existing user session
    if (isset($_SESSION['user'])) {
        //redirect to home page
        header("Location: index.php");
    }

    // use config.php
    require_once("config.php");

    //get form data for username and password and sanitize
    $username = $_POST['userName'];
    $password = $_POST['password'];

    //connect to the database
    $connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

    //check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // prepare the query
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    // execute the query
    $result = $connection->query($sql);

    // check if username and password are correct
    if ($result->num_rows == 1) {
        // username and password are correct
        $_SESSION['user'] = $username; //store session data

        // set a unique session coockie to preserve the session information
        $random_string = bin2hex(random_bytes(10));
        $cookie_name = "session_" . session_id() . "_" . $random_string;
        setcookie($cookie_name, session_id(), time() + 86400, "/", "", true, true); // 86400 = 1 day

        header("Location: index.php"); //redirect to home page
    } else {
        // username and password are incorrect
        $error = "Username or Password is invalid";
    }

    //close connection
    $connection->close();

?>