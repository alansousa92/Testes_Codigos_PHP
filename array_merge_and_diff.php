<?php

$a = ['alan','santos','sousa'];
$b = ['jose','satiro','sousa'];
$c = array_diff($b,$a);
$d = array_merge($a,$b);

print "Array \$a\n";
print_r($a);
print "\n\n";
print "Array \$b\n";
print_r($b);
print "\n\n";
print "União dos dois arrays: \$a e \$b\n";
print_r($d);
print "\n\n";
print "\n\n";
print "Utiliando va_dump() para ver a diferenção dos arrays por meio do array_diff()\n";
var_dump($c);
?>
