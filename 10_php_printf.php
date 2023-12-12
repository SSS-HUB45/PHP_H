<?php
$fname = "Albert";
$lname = "Einsein";
$mname = "Nothing";

printf('His name is %3$s, %1$s, %2$s', $fname, $mname, $lname);     //variable swaping
echo "\n";
printf('The binary equivalent of %1$d is %1$b', 16);
echo "\n";

$n = 46.3436;
printf("%.3f", $n);
echo "\n";

$p = 246;
$q = 26;
printf("%04d\n", $p);
printf("%04d\n", $q);

$x = 382.5638;
printf("%09.3f", $x);
