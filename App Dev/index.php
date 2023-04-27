<?php

// Database connection details
$host = 'localhost';
$user = 'cms_w';
$password = '64w6H2rOJ1zwLRyk';
$database = 'fruits';

// Create PDO connection
$dsn = "mysql:host=$host;dbname=$database";
$pdo = new PDO($dsn, $user, $password);

// Prepare SQL statement to retrieve category data
$sql = "SELECT DISTINCT category FROM food";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Loop through results and display category data
while ($row = $stmt->fetch()) {
    $category = $row['category'];
    echo $category . '<br>';
}

// Prepare SQL statement to retrieve category data
$sql = "SELECT DISTINCT item FROM food";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Loop through results and display category data
while ($row = $stmt->fetch()) {
    $item = $row['item'];
    echo $item . '<br>';
}

// Close database connection
$stmt = null;
$pdo = null;

?>