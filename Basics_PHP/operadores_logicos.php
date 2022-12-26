<?php

function foo(){
    echo "oi\n";
}

$a = (false || foo());
$b = (true || foo());
$c = (false and foo());
$d = (true or foo());

var_dump($a, $b, $c, $d);
