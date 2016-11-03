<?php

header('Content-Type: text/plain');

$dsn = 'mysql:host=localhost;dbname=akademija;charset=utf8';
$username = 'root';
$password = null;

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
};

$sql = "SELECT * FROM `attendee`";

$stmt = $conn->query($sql);
/*
while ($row = $stmt->fetch()) {
    print ($row['id']) . "\t";
    print ($row['name']) . "\t";
    print ($row['email']) . "\n";
    
}
*/
foreach ($stmt->fetchAll() as $row){
    print ($row['id']) . "\t";
    print ($row['name']) . "\t";
    print ($row['email']) . "\n";
}

foreach ($stmt as $row){
    print ($row['id']) . "\t";
    print ($row['name']) . "\t";
    print ($row['email']) . "\n";
}