<?php
/*
 * Types declarations podem ser adicionados para parametros de funções,
 * retorno de valores  e a partir do php7.4 propriedades de classes
 */

/*
 * Tipos unicos:
 * nomes de Classes/Interfaces;
 * self;
 * parent;
 * array;
 * callable(anonymous functions/user functions);
 * bool;
 * float;
 * int;
 * string;
 * iterable(arrays/objects - PHP7.1.0);
 * object(PHP7.2.0);
 * mixed(PHP8.0.0);
 *
 * mixed é equivalente ao 'union type' - objejct|resource|string|int|float|bool|
 * |null. Disponivel no PHP8.0.0
 */

//Basic class type declaration
/*
class C {}
class D extends C {}

//Essa não extende C
class E {}

function f(C $c) {
    echo get_class($c).PHP_EOL;
}

f(new C);
f(new D);
f(new E);
 

//Basic return type

function sum($a, $b): float {
    return $a + $b;
}

var_dump(sum(1, 4));
 */

//Retornando um objeto
class C {}

function getC(): C {
    return new C;
}

var_dump(getC());

?>
