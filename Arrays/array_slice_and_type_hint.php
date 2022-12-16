<?php
/*
 * array_slice():array
 * Definição: Extrai uma parcela de um array
 */

function sample(array $list, int $length): array {
    return array_slice($list, 0, $length);
}
$array = ['a','b','c','d','f','g'];

var_dump(sample($array, 4));
