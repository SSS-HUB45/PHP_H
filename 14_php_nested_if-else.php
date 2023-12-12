<?php
$state1 = true;
$state2 = true;
$state3 = false;

if ($state1) {
    if ($state2) {
        if ($state3) {
            echo "Welcome";
        } else {
            echo "Check 1";
        }
    } else {
        echo "Check 2";
    }
} else {
    echo "Check 3";
}
echo "\n";

if ($state1 && $state2 && $state3) {
    echo "Welcome";
} elseif ($state1 && $state2) {
    echo "Check 1";
} elseif ($state1) {
    echo "Check 2";
} else {
    echo "Check 3";
}
