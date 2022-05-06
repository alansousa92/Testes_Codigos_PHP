<?php

class Foo{
     public static $meu_estatico = 'foo';

     public function valorEstatico() {
         return self::$meu_estatico;
     }
}

class Bar extends Foo{
     public function fooEstatico() {
         return self::$meu_estatico;
     }
}


//print Foo::$meu_estatico . "\n";

//$foo = new Foo();
//echo $foo->meu_estatico;
//echo $foo->valorEstatico();
//print $foo->$meu_estatico . "\n"; 
//print $foo::$meu_estatico . "\n";
//print Foo::$meu_estatico."\n";


//print Bar::$meu_estatico . "\n";

$bar = new Bar();
print $bar->fooEstatico() . "\n";



/*
class a{

    static protected $test="class a";

    public function static_test(){

        echo static::$test."\n"; // Results class b
        echo self::$test."\n"; // Results class a
    }
}

class b extends a{

    static protected $test="class b";

}

$obj = new b();
$obj->static_test();
 */
?>
