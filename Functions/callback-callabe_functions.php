<?php
/*
 * Funções de callback poder ser definidas pelo usuario e
 * usando o nome da função para passar como parametro.
 * Funções de callback não precisam ser apenas funções simples,
 * mas tambem metodos de objetos, incluindo os estaticos
 * 
 * Uma função PHP é passada atraves de seu nome como uma string. Qualquer função interna
 * ou definida pelo usuario pode ser utilizada, com exceção de alguns construtores de linguagem
 * Alem de funções comuns definidas pelo usuario, funções anonimas e arrow functions tambem
 * podem ser passadas como um parametro de callback
 */


/*
function minha_func_callback() {
    echo "ola mundo de merda\n";
}

function ativarFunc(callable $func) {
    if (is_callable($func)) {
        return $func();
    }
}

ativarFunc('minha_func_callback');
 */

$sum = function (callable $callback,  ...$numbers) {
    return $callback($numbers);
};

function foo($element){
    return array_sum($element);

}

echo $sum('foo', 1,2);



