<?php
$x = false || true;     //true
$y = false or true;     //($x = false) or true => $x = false

$m = true && false;
$n = true and false;

// echo "\n";

var_dump($x, $y);
var_dump($m, $n);
