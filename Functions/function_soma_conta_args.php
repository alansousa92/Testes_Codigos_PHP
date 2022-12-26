<?php
/*
function contadorArgumentos(){
  
  if(func_num_args() == 0){
    
    return false;
  
    
  }else{
    
    $count = 0;
    
    for($i = 0; $i < func_num_args(); $i++){
      $count += func_get_arg($i);
    }
    
    return $count;
  }
}

print contadorArgumentos(1, 2, 5);
 */

print '</br>'.PHP_EOL;

function Conta_Soma_Argumentos(){

  if(func_num_args() == 0){

    return false;


  }else{

    $count = 0;
    $sum = 0;

    for($i = 0; $i < func_num_args(); $i++){
      $sum += func_get_arg($i);
      $count += $i;
    }

    print 'A soma dos argumentos é: '.$sum.'<br>';
    return $count;
  }
}


Conta_Soma_Argumentos(1, 2, 5);

