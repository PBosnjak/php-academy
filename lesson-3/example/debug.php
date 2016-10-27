<?php
echo "<pre>";
var_dump($_FILES);
var_dump($_POST);
echo "</pre>";


       $query = "INSERT INTO prijave (ime, email, smjer, godina, motiv,"
                . " predznanje, php, java, python, c, drugi , kod) "
                . "VALUES ('{$_POST['ime']}', '{$_POST['email']}', '{$_POST['smjer']}',"
                . " '{$_POST['godina']}', '{$_POST['comm']}', '{$_POST['comm2']}',"
                . " '{$_POST['php']}', '{$_POST['java']}',"
                . " '{$_POST['python']}', '{$_POST['c']}',"
                . " '{$_POST['drugi']}', '{$_FILES['fileUpload']['name']}')";
      
            echo $query;