<?php

echo "FOR:\n";
for ($i = 0; $i <= 20; $i += 2) {
    // echo $i;
    echo PHP_EOL;
    for ($j = 0; $j < $i; $j++) {
        echo "#";
    }
}

echo "WHILE:\n";
echo PHP_EOL;
$i = 0;
while ($i < 10) {
    $i++;
    echo $i . PHP_EOL;
}

echo "DO WHILE:\n";
echo PHP_EOL;
$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 10);

echo "GO TO:\n";
$i = 0;
a:
$i++;
echo $i . PHP_EOL;
if ($i < 10) goto a;
