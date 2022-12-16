<?php

function prettyPrintArray(array $value)
{
    print '<pre>';
    print_r($value);
    print '</pre>';
}

// array_chunk(array $array, int $length, bool $preserve_keys = false): array
// Divide um array em pedaços

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2));
