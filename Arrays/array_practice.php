<?php

$meals = array(
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
    'Shrimp Puffs' => 0 //shrimp puffs are free!
);

/*
echo "Array antes da mudança dos valores\n";
foreach ($meals as $dish => $price) {
    echo $dish . " - " . $price . "\n";
}

foreach ($meals as $dish => $price) {
    // $price = $price * 2 não vai funcionar
    
    $meals[$dish] = $meals[$dish] * 2;
}

echo "Array apos a mudança\n";
//Iterar sobre o array de nove e exibir os valores mudados
foreach ($meals as $dish => $price) {
    echo $dish . " - " . $price . "\n";
}
 */

if (array_key_exists('Shrimp Puffs', $meals)) {
    print "Sim, nos temos Shrimp Puffs\n";
}
