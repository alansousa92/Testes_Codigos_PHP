<?php

//Variavel global
$num = 500;

function teste_escopo() {

  //Usando keyword global
  /*global $num;
  $num += 5;
  echo $num."\n";
   */

  $GLOBALS['num'] += 5;
  echo $GLOBALS['num']."\n";

}

echo $num."\n";
teste_escopo();
