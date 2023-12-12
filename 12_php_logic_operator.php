<?php
// $n = 15;
// if ($n % 2 == 0) {
//     echo "$n is an even number.";
// } else {
//     echo "$n is a odd number.";
// }

/*
// Logical Operators
==
!=
>
<
>=
<=
*/
// $m = 16;
// $n = 18;

// if ($m != $n) {
//     echo "M is not equal to N";
// }

// $salam = 150;
// $kalam = 250;

// if ($salam == $kalam) {
//     echo "Salam and Kalam has same amount of money.";
// } else if ($salam > $kalam) {
//     echo "Salam has more money than Kalam.";
// } else if ($salam < $kalam) {
//     echo "Salam has less money than Kalam.";
// }

$age = 12;

if ($age >= 13 && $age <= 19) {
    echo "This person is a teenager.";
} else {
    echo "This person is not a teenager.\n";
}

$food = "salmon";

if ("salmon" == $food || "tuna" == $food) {
    echo "{$food} has vitamin D";
} elseif ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
} else {
    echo "We don't know if {$food} contains vitamin D";
}
