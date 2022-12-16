<?php
/*
function square($x) {
  return $x * $x;
}

print 'O quadrado de 5 é ' . square(5);
echo "\n";
 

function func() {
  $GLOBALS['var'] = 2;
}

$var = 1;
func();
print $var."\n";
 */

//Retornando valores por referencia
function change(&$data) {
  $data = 25;
  return $data;
}

$value = 10;
print $value."\n";
change($value);
print $value."\n";
print "\n\n";

function increment(&$num, $increment = 1) {
  $num += $increment;
}

$num = 0;

for( $i = 0; $i <= 10; $i++) {
  increment($num);
  if($num == 1)
  echo $num."\n";
}


