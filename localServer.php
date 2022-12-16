<?php

echo 'Exibe a linha atual: '.__LINE__."<br>";
echo 'Exibe o caminho completo do arquivo: '.__FILE__."<br>";
echo 'Exibe o caminho completo do diretorio: '.__DIR__."<br>";
echo '<br>';
echo '<h3>Exibe o ambiente do Servidor</h3>';
echo "<pre><h3>";
print_r($_SERVER);
echo "</h3></pre>";
echo '<h3>Sistema Operacional que o PHP esta executando</h3>';
echo PHP_OS;
?>