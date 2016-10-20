<?php
header('Content-Type: text/plain');

function test() {
    echo "Text is executed \n";
}

test();

function test2($a, $b = 2) {
    return ($a**$b);
};

$c=test2(5);
var_dump($c);

//anonymus funkcija
/*
$b = array_map(function($value)) {
   return $value * 2;
} , $a);
*/