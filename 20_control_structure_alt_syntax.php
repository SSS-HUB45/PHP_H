<?php
$n = 16;

if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo PHP_EOL;

if ($n % 2 == 0) :
    echo "Even Number";
    echo PHP_EOL;
    echo "Something";
else :
    echo "Odd Number";
    echo PHP_EOL;
    echo "Something++";
endif;

echo "\n";
echo PHP_EOL;
switch ($n % 2 == 0):
    case 0:
        echo "Even Number";
        break;
    default:
        echo "Odd Number";
endswitch;
echo "\n";
?>

<?php
if ($n % 2 == 0) :
?>
    Even Number
    Something
<?php
else :
?>
    Odd Number
    Something++
<?php
endif;
