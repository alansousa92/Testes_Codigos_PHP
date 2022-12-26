<?php

/*
 * Tipos de Dados PHP
 * Escalares:
 *  integer - 2, 5, 10, 50, 1000, ...
 *  float/double - 2.5, 5.45, 10.3, 10.620, ...
 *  boolean - true , false
 *  strings - 'alan', "santos" ..
 *
 * Compostos:
 *  arrays
 *  objects
 *  callable/callbacks
 *  iterable(iteraveis)
 *
 * Especiais:
 *  NULL - usada para representar uma variavel sem valor
 *  resource - exemplo, conexão com banco de dados
 *
 */

//Tipo Float, Integer, Strings

/*
echo $a = 1.234;
echo PHP_EOL;
echo $b = 1.2e3;
echo PHP_EOL;
echo $c = 1_200_321;
echo PHP_EOL;
echo $c.PHP_EOL;
echo 'Tamanho de um inteiro em bytes: '.PHP_INT_SIZE."\n";
ECHO 'O numero flutuante maximo: '.PHP_FLOAT_MAX."\n";
echo 'O numero flutuante minio: '.PHP_FLOAT_MIN."\n";
echo 'O numero inteiro maximo: '.PHP_INT_MAX."\n";
echo 'O numero inteiro minimo: '.PHP_INT_MIN."\n";

echo "A divisão de dois numeros pela função intdiv()\n";
echo "1/2 = ".intdiv(1,2);
echo PHP_EOL;


echo "alan \vsantos de \vSousa\n";
// //Heredoc
echo <<< Begin
ola mundo de merda,
como voce esta essa noite?.\n
Begin;

 */

//Operadores aritmeticos
/*
$a = 10;
$b = 5;

var_dump($a + $b)."\n";
var_dump($a - $b)."\n";
var_dump($a * $b)."\n";
var_dump($a / $b)."\n";
var_dump($a % $b)."\n";
var_dump($a ** $b)."\n";
var_dump(-$a);
 */

//echo "\n\n";

//Operadores comparação
/*
var_dump(4 > 10)."\n"; //false
var_dump(4 < 10)."\n"; //true
var_dump(5 <= 5)."\n"; //true
var_dump(15 >= 15.5)."\n"; //false
var_dump(4 == 10)."\n"; //false
var_dump(10 == 10)."\n"; //true
var_dump(10 === '10')."\n"; //false
var_dump(4 <=> 10)."\n"; //-1
var_dump(4 <> 10)."\n"; //true
var_dump(4 != 10)."\n"; //true
var_dump(4 !== 10)."\n"; //true
 */

//Incremeneto e Decremento
/*
$a = 10;

echo --$a."\n";
echo $a."\n";
 */

//Trabalhando com strings -- INICIO ----
/*
 * Funções para Strings:
 * strtolower() - transforma em minusculo
 * strtoupper()
 * ucwords()
 * ucfirst()
 * strlen()
 * trim()
 * rtrim()
 * ltrim()
 * str_word_count()
 * strrev()
 * lcfirst() - torna minusculo o primeiro caractere de uma string
 * strpos() - retorna a posicão de uma ocorrencia
 * stripos() - retorna a posicão de uma ocorrencia não importanto a capitalização
 * substr() - retorna parte de uma string
 * str_replace() - substitui dada ocorrencia
 * str_ireplace() - substitui dada ocorrencia não importaando a capitalização
 */
$texto = '    Como pode um marisco empinar em uma lata de creme limpa?     ';

print $texto.PHP_EOL;

echo 'Numero de caracteres na string: '.strlen($texto).PHP_EOL;
echo 'Limpando whitespaces com trim: '.PHP_EOL;
echo trim($texto).PHP_EOL;
echo 'strlower: '.strtolower($texto).PHP_EOL;
echo 'strtoupper: '.strtoupper($texto).PHP_EOL;

echo 'Trocando palavra marisco por peixe:'.PHP_EOL;

echo str_replace('marisco', 'peixe', $texto).PHP_EOL;

echo "\n\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";

$name = 'alan santos de sousa';
echo $name."\n";
echo 'Quantidade de caracteres: '.strlen($name).PHP_EOL;
echo 'Quantidade de palavras: '.str_word_count($name).PHP_EOL;
echo 'Revertendo a ordem: '.strrev($name).PHP_EOL;
echo 'Tudo minusculo: '.strtolower($name).PHP_EOL;
echo 'Tudo maiusculo: '.strtoupper($name).PHP_EOL;
echo '1º palavra em maiusculo: '.ucfirst($name).PHP_EOL;
echo 'Todas as palavras em maiusculo: '.ucwords($name).PHP_EOL;
echo 'Posição de ocorrencias de palavras: '.strpos($name, 'de').PHP_EOL;
echo 'Posição de ocorrencias de palavras: '.stripos($name, 'SOUSA').PHP_EOL;
echo 'Substituição de palavras: '.str_replace('alan', 'Anthony', $name).PHP_EOL;


//Trabalhando com strings -- FIM ----

//Arrays
//$a = array(array('00', '01'), array('10', '11'));

//echo $a[0][0].' '.$a[0][1].' '.$a[1][0].' '.$a[1][1];
