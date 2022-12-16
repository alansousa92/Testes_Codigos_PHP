<?php

/*
Calculo entre datas
*/

$data_inicial = '2022-09-30';
$data_final = '2022-10-31';

/*Converter essas datas em strings em timestamp
que seria uma representação dessa data.*/

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

// strtotime -  retorna os numero de segundo das datas
echo $data_inicial.' - '.$time_inicial.'<br>';
echo $data_final.' - '.$time_final.'<br>';

$diferancas_times = $time_final - $time_inicial;
// abs() - retorna valor absoluto
echo '<br>';
echo 'A diferença de segundos entre a data inicial e final é: ' . $diferancas_times . '<br>';

$seg_exist_dia = 24*60*60;

echo 'Um dia possui ' . $seg_exist_dia . ' segundos<br>';

$diferenca_de_dias_datas = $diferancas_times/$seg_exist_dia;

echo '<br>';

echo 'A diferença em dias é: ' . $diferenca_de_dias_datas;