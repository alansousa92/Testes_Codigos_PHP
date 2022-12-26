<?php

function instanciarObjeto () {
    return new class {
        public function ola() {
            echo "OLa alan!";
        }
    };
}

$foo = new class {
    public function foo() {
        return "ALAN";
    }
};

echo $foo->foo();
echo "<br>";

$objeto = instanciarObjeto();
$objeto->ola();