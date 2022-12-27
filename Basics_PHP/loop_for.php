<?php

echo "Contando de 1 a 10 com For Loop: \n";
for ($count = 0; $count <= 10; $count++) {
  echo 'A variavel $count  vale: ' . $count . "\n";
}

echo "\n++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
// Array Bidimensional
$vetor = [
  ['elemento00', 'elemento01'],
  ['elemento10', 'elemento11']
];

echo "Array Bidimensionanl a ser iterado\n";
print_r($vetor);

/*Percorrer um array com for, so serve para arrays numericos*/
echo "Percorrer um array com for, so serve para arrays numericos\n";
for($i = 0; $i < 2; $i++) {

  for($j = 0; $j < 2; $j++) {
    echo "O elemento da posição {$i}, {$j} é:  " . $vetor[$i][$j] . "\n";
  }
}

echo "\n++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
echo "Estou fazendo uma contagem regressiva: \n";
for ($i = 15; $i >= 0; $i--)
{
  echo $i . ', ';
}
echo "... FIM!\n";

echo "\n++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
echo "Podemos ter mais de uma variavel na região de inicialização e no incremento do Loop For\n";
for ($a = 0, $b = 10; $a <= 10; $a++, $b--) {
  echo "\$a = $a \t| \$b = $b ";
  if ($a == $b) {
    echo "- (os valores são iguais aqui)";
  }
  echo "\n";
}
