<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $dbusername = "yourusername";
    $dbpassword = "yourpassword";
    $dbname = "yourdbname";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct
    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['login_user'] = $username; // Store session data
        header("location: welcome.php"); // Redirect to welcome page
    } else {
        $error = "Username or Password is invalid";
    }

    $conn->close();
}
?>

<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php echo isset($error) ? $error : ''; ?>
</body>
</html>
