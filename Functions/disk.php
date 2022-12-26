<?php
//Testando funções de sistema de arquivos
#disk_free_space();
#disk_total_space();


$free_space_dir = disk_free_space('/');
$total_space = disk_total_space('/');

echo "<h2>Tamanho disponivel na Raiz </h2>";
echo '<p>'.number_format($free_space_dir).' bytes</p>';
echo "<h2>Tamanho total da raiz </h2>";
echo '<p>'.number_format($total_space).' bytes </p>';

?>
