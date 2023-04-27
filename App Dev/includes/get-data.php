<?php

// Database connection details
$host = 'localhost';
$user = 'cms_w';
$password = '64w6H2rOJ1zwLRyk';
$database = 'fruits';

// Create PDO connection
$dsn = "mysql:host=$host;dbname=$database";
$pdo = new PDO($dsn, $user, $password);

// Prepare SQL statement to retrieve data from food table
$sql = "SELECT * FROM food";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all rows as an associative array
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output data as a JSON object
echo json_encode($rows);

// Close database connection
$stmt = null;
$pdo = null;

?>