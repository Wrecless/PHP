<?php
// Database connection information
$host = 'localhost';
$username = 'cms_w';
$password = '64w6H2rOJ1zwLRyk';
$database = 'fruits';

// CSV file information
$csvFile = 'files/fruitvegprices-17apr23.csv';
$delimiter = ',';

// Create a PDO connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Open the CSV file for reading
$file = fopen($csvFile, 'r');

// Prepare the SQL statement for inserting data into the products table
$sql = "INSERT INTO food (id, category, item, variety, date, price, unit) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Loop through each row in the CSV file and insert it into the products table
while (($data = fgetcsv($file, 1000, $delimiter)) !== FALSE) {
    $stmt->execute($data);
}

// Close the file and database connections
fclose($file);
$stmt = null;
$pdo = null;

echo "Data imported successfully!";
?>