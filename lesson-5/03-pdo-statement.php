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
/*
$id = 1; //user input kojem ne vjerujemo
$sql = 'SELECT * FROM attendee WHERE id = ?';

$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

foreach ($stmt as $row){
    print ($row['id']) . "\t";
    print ($row['name']) . "\t";
    print ($row['email']) . "\n";
}
*/

$id = 1; //user input kojem ne vjerujemo
$sql = 'SELECT * FROM attendee WHERE id = :id';

$stmt = $conn->prepare($sql);
$stmt->execute([
    'id' => $id, //$_GET['id]
    //'ime' => 'nesto'
]);

foreach ($stmt as $row){
    print ($row['id']) . "\t";
    print ($row['name']) . "\t";
    print ($row['email']) . "\n";
}