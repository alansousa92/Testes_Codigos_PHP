<?php
//Acessando caracteres de strings individuais
print 'Acessando caracteres de uma strings individualmente'."\n";
$nome = "Alan";

print "Exibindo cada letra do meu nome\n";
for( $i = 0; $i < strlen($nome); $i++){
  print "Na posição $i -> letra $nome[$i]\n";
}
