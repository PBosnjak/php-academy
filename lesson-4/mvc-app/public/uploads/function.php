<?php

function dbConnect (){
    $servername = "localhost";
    $username = "root";
    $password = null;
    $dbname = "php-akademija";
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    return $conn;
    
};