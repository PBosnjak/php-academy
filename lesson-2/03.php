<?php
header('Content-Type: text/plain');

$isTrue = '';

if ($isTrue) echo "It's true\n";

$result = $isTrue ? 'one' : 'two';
var_dump($result);

$result = $isTrue ?: false;
var_dump($result);

var_dump(isset($lol));
if (isset($lol) && $lol==3) {
    
}