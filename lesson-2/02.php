<?php
header('Content-Type: text/plain');

$n=1;
$f=2.55;

var_dump($n+$f);
$b=true;
var_dump($b + $n +$f);

$n+=10;
var_dump($n);
$n*=10;
var_dump($n);

$s= 'php akademija';
$s= $s . ' u Osijeku';
$s.= ' u Osijeku';
var_dump($s);

$a = [
    1,
    2,
    'one' => 'a1',
    'two' => 'a2'
];
$b = [
    2,
    3,
    'two' => 'b2',
    'three' => 'b3'
];
var_dump($a + $b);
var_dump(array_merge($a, $b));
var_dump(array_replace($a, $b));

