<?php

# LOOP WHILE

$count = 0;
while($count++ < 100) {

  if($count >= 50 && $count <= 80){
    continue;
  }

  echo "O valor atual do contador é $count \n";
}



# LOOP DO...WHILE
/*
$a = 1;
do {
  
  if( ++$a >= 50 && $a <= 80 ){
    continue 1;
  }
  
  echo "O valor atual do contador é $a \n";
  //$a++;

}while( $a < 100 );
/*

# LOOP FOR
/*
for($i = 1; $i < 100; $i++ ){
  if($i > 50 && $i < 80) {
    continue;
  }

  echo "O valor atual do contador é $i \n";
}
 */
