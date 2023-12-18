<?php
$n = 16;
$r = $n % 2;
// $r = abs($n % 2);

switch ($r) {
    case 0:
        switch ($n) {
            case $n > 0;
                echo "$n is a positive even number";
                break;
            case $n < 0;
                echo "$n is a negative even number";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0;
                echo "$n is a positive odd number";
                break;
            case $n < 0;
                echo "$n is a negative odd number";
                break;
        }
}

echo "\n";

switch (true) {
    case (0 == $r && $n > 0):
        echo "$n is a positive even number";
        break;
    case (1 == $r && $n > 0):
        echo "$n is a positive odd number";
        break;
    case (0 == $r && $n < 0):
        echo "$n is a negative even number";
        break;
    case (-1 == $r && $n < 0):              // case ($r == -1 && $n < 0): runs if we use abs.
        echo "$n is a negative odd number";
        break;
}

echo "\n";

/* Switch Case(Interesting) */
$string = "6balls";
switch ($string) {
    case (string)"7balls":
        echo "Seven Balls";
        break;
    case (string) 6:
        echo "6";
        break;
    case (string) "6balls":
        echo "Six Balls";
        break;
}
