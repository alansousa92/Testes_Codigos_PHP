<?php
$x = strcmp("x54321", "x5678");
if($x > 0){
    print 'a string "x54321" é maior que a string "x5678".';
} else{
    print 'a string "x54321" é menor que a string "x5678".';
}

echo "\n";

$y = strcmp("54321","5678");
if($y > 0){
    print 'a string "54321" é maior que a string "5678".';
} else{
    print 'a string "54321" é menor que a string "5678".';
}
?>