<?php

/* return/ declare / tick */

/*
//return
function sum(int $x, int $y) {
  $z = $x * $y;

  return $z;
}

$x = sum(5, 10);
echo $x;

return;
echo '<br>';
echo 'Ola mundo de merda!';
 */

//declare
declare(ticks=1);
// A função a ser chamada em cada evento tick
function tick_handler()
{
    echo "Um tick foi chamado.<br>";
}

register_tick_function('tick_handler'); // Causa um evento tick
$a = 1;
$b = 5;
$c = $a + $b;


