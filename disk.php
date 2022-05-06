<?php
//Testando funções de sistema de arquivos
#disk_free_space();
#disk_total_space();


$free_space_dir = disk_free_space('/');
$total_space = disk_total_space('/');

echo "Tamanho disponivel na Raiz\n";
echo "$free_space_dir bytes\n";
echo "Tamanho total da raiz\n";
echo "$total_space\n";

?>
