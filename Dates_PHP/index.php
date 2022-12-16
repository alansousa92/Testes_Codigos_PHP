<?php

/* Date and Time */

//função time() retorna um inteiro com o timestamp atual em segundos 
//desde 1º de janeiro 1970
$tempoAtual = time();

echo $tempoAtual."\n";

//Para transformar numero de dias em segundos:
// Dia * horas * minutos * segundos;
// Transformar 2 dias em segundos:

echo  2 * 24 * 60 * 60 . "\n";

//O timestamp daqui a 2 dias:
echo $tempoAtual + 2*24*60*60 . "\n";

//O timestamp daqui a 1 dias:
echo $tempoAtual + 24*60*60 . "\n";

//A função date() retorna uma string com a data formatada, usa a função
//time() como segudno parametro padrão:
//date('strings de formatação', time()): string
echo "A data de hoje\n";
echo date('d/m/Y - g:i:s a') . "\n";
echo "A data daqui a 1 dias\n";
echo date('d/m/Y - g:i:s a', time() + 24*60*60) . "\n";
echo "A data daqui a 2 dias\n";
echo date('d/m/Y - g:i:s a', time() + 2*24*60*60) . "\n";

echo date_default_timezone_get() . "\n";
date_default_timezone_set('UTC');
echo "A data de hoje\n";
echo date('d/m/Y - g:i:s a') . "\n";
echo "A data daqui a 1 dias\n";
echo date('d/m/Y - g:i:s a', time() + 24*60*60) . "\n";
echo "A data daqui a 2 dias\n";
echo date('d/m/Y - g:i:s a', time() + 2*24*60*60) . "\n";

echo date_default_timezone_get() . "\n";



