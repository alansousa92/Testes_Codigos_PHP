<?php

$var_array = ['alan','santos','sousa'];
list($nome,$sobrenome1,$sobrenome2) = $var_array;

echo 'Cada variavel de list() recebeu os valores do array $a'."\n";
print $nome."\n";
print $sobrenome1."\n";
print $sobrenome2."\n\n\n";

print $nome." ".$sobrenome1." ".$sobrenome2."\n";

print "\n==========================================\n";

//Verificando se determinado valor está no array selecionando
if( in_array('alan', $var_array) ){
    print "O valor esta no array \n";
}else{
    print "O valor  não esta no array \n";
}

?>
