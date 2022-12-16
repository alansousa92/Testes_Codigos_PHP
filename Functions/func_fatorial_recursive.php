<?php

/*Função recursiva  - chama a si mesma! */

//Fatorial
function fatorial($num) {
  if ($num <= 1 ) {
    return 1;
  }

  return $num * fatorial($num - 1);
}

echo 'Fatorial de 5: ';
echo fatorial(5) . "\n";
