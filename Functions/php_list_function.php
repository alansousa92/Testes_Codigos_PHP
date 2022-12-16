<?php

$var_array = ['alan','santos','sousa'];
list($nome,$sobrenome1,$sobrenome2) = $var_array;

print_r($var_array)."\n";

var_dump(in_array('santos', $var_array));
/*
echo 'Cada variavel de list() recebeu os valores do array $var_array'."\n<br>";
print '$nome: ' . $nome. "\n<br>";
print '$sobrenome1: ' . $sobrenome1 . "\n<br>";
print '$sobrenome2: ' . $sobrenome2 . "\n<br>";
 */


// print $nome." ".$sobrenome1." ".$sobrenome2."<br>";

// print "==========================================<br>";

// //Verificando se determinado valor está no array selecionando
// if( in_array('alan', $var_array) ){
//     print "O valor esta no array \n";
// }else{
//     print "O valor  não esta no array \n";
// }

/*
$info = ['café', 'marrom', 'cafeína'];

list($bebida, $cor, $substancia) = $info;

echo $bebida, $cor, $substancia;
 */


?>
