<?php

// Database connection details
$host = 'localhost';
$user = 'cms_w';
$password = '64w6H2rOJ1zwLRyk';
$database = 'fruits';

// Create PDO connection
$dsn = "mysql:host=$host;dbname=$database";
$pdo = new PDO($dsn, $user, $password);

// Open CSV file
$filename = 'files/fruitvegprices-17apr23.csv';
$file = fopen($filename, 'r');

// Prepare SQL statement for insertion
$sql = "INSERT INTO food (category, item, variety, date, price, unit) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Loop through CSV file and insert data
while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
    $category = $data[0];
    $item = $data[1];
    $variety = $data[2];
    $date = $data[3];
    $price = $data[4];
    $unit = $data[5];

    $stmt->execute([$category, $item, $variety, $date, $price, $unit]);
}

// Close file and database connection
fclose($file);
$stmt = null;
$pdo = null;

?>