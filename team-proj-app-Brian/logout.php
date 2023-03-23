<?php
session_start();

if(!isset($_SESSION['login_user'])){
    header("location: login.php");
}

$username = $_SESSION['login_user'];
?>

<html>
<head>
    <title>Welcome <?php echo $username; ?></title>
</head>
<body>
    <h2>Welcome <?php echo $username; ?></h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
