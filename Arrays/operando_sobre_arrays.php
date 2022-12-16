<?php

$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon']++;
$dishes['Roast Duck'] = 3;

$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];
/*
if ($dishes['total'] > 15) {
    print "voce comeu muito: ";
}

print 'Voce comeu ' . $dishes['Beef Chow Foon'] . ' dishes of Beef Chow Foon' . "\n";
 */

//Interpolando valores de elementos de um array em aspas duplas
$meals['breakfast'] = 'Cuscuz';
$meals['almoco'] = 'Churrasco';
$quantidade = array(3,6);

/*
echo "Para o café da manhã, eu gostaria de ".$meals['breakfast']." e para o almoço,\n";
echo "Eu gostaria de $meals[almoco]. I quero $quantidade[0] para o café da manhã e\n";
echo "$quantidade[1] para o almoço.\n";
 */

error_reporting(E_ALL);

$arr = array('fruta' => 'maça', 'legume' => 'cenoura');

//correto
//echo $arr['fruta']."\n";
//echo $arr['legume']."\n";
echo "Essa fruta é $arr[fruta]\n";
