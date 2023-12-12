<?php
$n = 16;
if (16 == $n) {
    echo "Sixteen";
} elseif (10 == $n) {
    echo "Ten";
} else {
    echo "A Number";
}
echo "\n";

$numberInWord = (16 == $n) ? "Sixteen" : "A Number";
// $numberInWord = (16 == $n) ? "Sixteen" : (10 == $n) ? "Ten" : "A Number";
echo $numberInWord;

echo "\n";

if ($n % 2 == 0) {
    echo "{$n} is Even";
} else {
    echo "{$n} is Odd";
}
echo "\n";

$result = ($n % 2 == 0) ? "{$n} is Even" : "{$n} is Odd";
echo $result;
