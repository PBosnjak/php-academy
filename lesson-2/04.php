<?php
header('Content-Type: text/plain');

$a=[1, 'two', 'three', 5];
foreach ($a as $value){
    echo $value . "\n";
}

foreach ($a as $key => $value){
    echo $key . "=>" . $value . "\n";
}

// break 2 - izaci iz dvije petlje

$list = [
    '<a> - anchor',
    '<p> - paragraph',
    '<ul> - unordered list',
    '<table> - table'
    
];


foreach ($list as $value){
    $var = explode(" - ", $value);
    //var_dump($var);
    echo $var[0] . "\t" . $var[1] . "\n";
}
