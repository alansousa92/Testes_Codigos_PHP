<?php

/*
$k = 1;
while ($k < 20) {
    if($k == 15) {
        echo "Usando a instrução break para finalizar o loop\n";
        break;
    }

    echo $k."\n";
    $k++;
}

echo "\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";

echo "Percorrer um array com for, so serve para arrays numericos\n";
for($i = 0; $i < 4; $i++) {
    echo "$i";

  for($j = 0; $j <= 10; $j++) {
      if ($j == 5) {
          break 2;
      }
      //echo "[$i][$j]\n";
      echo "\v $j";
  }
    echo "\n";
}
 */

echo "\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";

$i = 0; $k = 0;

while ($k < 10) {
    $i++;
    $k++;

    while ($i < 20) {
        if ($i == 10) {
            echo "Encerrando o 1º while...\n";
            break;
            echo " Essa linha não vai ser impressa!!!\n";
        } elseif ($i == 15) {
            echo "Encerrando os dois whiles...\n";
            break 2;
        }

        $i++;
    }
}
