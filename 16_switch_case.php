<?php
$n = 16;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is an Even Number";
        break;
    default:
        echo "{$n} is a Odd Number";
}
echo "\n";

$color = 'orange';

switch ($color) {
        /*case 'orange':
        echo "Orange is our favorite color";
        break;
    case 'blue':
        echo "Blue is our favorite color";
        break;*/
    case 'orange':
    case 'blue':
        echo ucwords($color) . " is our favorite color";
        break;
    case 'red':
        echo "Red is not our favorite color";
        break;
    default:
        echo "This color is ok";
}
