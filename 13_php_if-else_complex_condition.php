<?php
// 1 - diviiable by 4?
// 2 - diviiable by 100?
// 3 - diviiable by 400?

$year = 2024;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year.";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year.";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year.";
} else {
    echo "{$year} is not a leap year.";
}
echo "\n";

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year.";
} else {
    echo "{$year} is not a leap year.";
}
