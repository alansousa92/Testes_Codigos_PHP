<?php

$i = 0;

while (++$i) {
    switch ($i) {
    case 5:
        echo "At 5 \n";
        break 1; //Sai somente do switch
    
    case 10:
        echo "At 10; saindo \n";
        break 2; //saindo de switch e while

    default:
        break;
    }
}
