<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
/*
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
echo"<pre>";
var_dump($_FILES);
var_dump($_POST);
echo"</pre>";