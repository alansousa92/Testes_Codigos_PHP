<?php

/* variable, anonymous & arrou functions */
$x = 1;
/*
$sum = function (int ...$numbers) use (&$x) {
    $x = 15;
    echo $x."\n";
    return array_sum($numbers);
};
*/

$sum = fn(int ...$numbers) => $x + array_sum($numbers);

echo $sum(1,2,3,4);
echo "\n".$x."\n";

#Sem o simbolo de referencia &
//Output 15,10,1

#Com o simbolo de referencia &
//outpu 15,10,15
