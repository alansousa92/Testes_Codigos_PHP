<?php

/*
Ordenando arrays:
sort() - low to high
rsort() - high to low
asort() - mantem as keys - low to high
arsort() - mantem as keys - high to low
ksort() - ordena keys - mantem as keys - low to high
krsort() - ordena keys - mantem as keys - high to low
*/

$propriedades = [
    'firstname' => 'Jose',
    'surname' => 'Satiro de Sousa',
    'house' => 'Piauí'
];

echo 'Exibindo o array: <br>';
echo '<pre>';
print_r($propriedades);
echo '</pre>';
echo '<hr>';

$propriedades1 = $propriedades2 = $propriedades3 = $propriedades;

echo 'Ordenando com sort() <br>';
sort($propriedades1);
echo '<pre>';
print_r($propriedades1);
echo '</pre>';
echo '<hr>';

echo 'Ordenando com asort() <br>';
asort($propriedades3);
echo '<pre>';
print_r($propriedades3);
echo '</pre>';
echo '<hr>';

echo 'Ordenando com ksort() <br>';
ksort($propriedades2);
echo '<pre>';
print_r($propriedades2);
echo '</pre>';
echo '<hr>';

echo 'Outras funções para arrays - arrray_keys() <br>';
echo '<pre>';
print_r(array_keys($propriedades));
echo '</pre>';
echo '<hr>';

echo 'Outras funções para arrays - arrray_values() <br>';
echo '<pre>';
print_r(array_values($propriedades));
echo '</pre>';
echo '<hr>';