<?php
/* Foram introduzidas no php7.4 como uma sintaxe mais concisa de clousers.*/
//Nas arrow function o uso de variaveis do escopo pai é sempre automatico

$y = 1;

#arrow function
$fn1 = fn($x) => $x + $y;

// $fn1 é equivalente a $fn2

#função anonima
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

print "<br>----------------------------------------<br>";

$array = [1,2,3,4];

$array2 = array_map(fn($number) => $number * $number, $array);

print '<pre>';
print_r($array2);
print '</pre>';

