<?php

/* Funções para strings e arrays:
 * Strings:
 * strlen()
 * trim()
 * ltrim()
 * rtrim()
 * strtoupper()
 * strtolower()
 * ucfirst()
 * ucwords()
 * str_replace()
 * str_ireplace()
 * substr()
 * strpos()
 * str_word_count()
 * strrev()
 * explode('separator', $string): array - turn string to array
 * implode('separator', $array): string - turn array to string
 * -----------------------------------------------------------
 *
 * Arrays:
 * array_push() - add elemento ao final do array
 * array_unshift - add elemento no inicio do array
 * array_pop - remove elemento do final do array
 * array_shift - remove elemento do inicio do array
 * array_chunk($array, nº) - divide um array em pedaços
 * array_merge - funde um ou mais arrays
 * ...
 */

$familyGroup = [
    'alan',
    'josé',
    'maria',
    'alessandra',
    'billy',
    'baruk'
];

//print_r($familyGroup);
//echo implode('|', $familyGroup);

# Arrow function
$numbers = [ 1,2,3];

// function square($n) {
//     return $n*$n;
// }

$square = array_map(fn($n) => $n*$n, $numbers);

var_dump($square);




?>
