<?php
require_once 'function.php';
$destination = "uploads/{$_FILES['fileUpload']['name']}";

if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $destination)) {
    $val = 1;
    
    $conn = dbConnect();
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
       $query = "INSERT INTO prijave (ime, email, smjer, godina, motiv,"
                . " predznanje, php, java, python, c, drugi , kod) "
                . "VALUES ('{$_POST['ime']}', '{$_POST['email']}', '{$_POST['smjer']}',"
                . " '{$_POST['godina']}', '{$_POST['comm']}', '{$_POST['comm2']}',"
                . " '{$_POST['php']}', '{$_POST['java']}',"
                . " '{$_POST['python']}', '{$_POST['c']}',"
                . " '{$_POST['drugi']}', '{$_FILES['fileUpload']['name']}')";
    
    $conn->query($query);
    $conn->close();
    
    
    
    
    
} else {
    $val = 2;
    
};
header("Location: form.php?val={$val}");
