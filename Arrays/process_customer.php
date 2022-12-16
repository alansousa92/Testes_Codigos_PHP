<?php
require 'validate_input.inc.php';
/*
 * Acessar informações de example1.html
 * Isto não é um programa completo
 * A função/metodo validate() mostra o que precisa para criar uma entrada de dados limpa
 */

/*
$primeiro_nome = validate_primeiro_nome($_POST['primeiro_nome']);
$sobrenome = validate_sobrenome($_POST['sobrenome']);
$endereco = validate_endereco($_POST['endereco']);
$cidade = validate_cidade($_POST['cidade']);
$estado = validate_estado($_POST['estado']);
$cep = htmlspecialchars($_POST['cep']);
 */

//Trocando por arrays

$registro_cliente[] = validate_primeiro_nome($_POST['primeiro_nome']);
$registro_cliente[] = validate_sobrenome($_POST['sobrenome']);
$registro_cliente[] = validate_endereco($_POST['endereco']);
$registro_cliente[] = validate_cidade($_POST['cidade']);
$registro_cliente[] = validate_estado($_POST['estado']);
$registro_cliente[] = htmlspecialchars($_POST['cep']);

print "Seu nome é $registro_cliente[0] $registro_cliente[1]. <br>";
print "Voce vive em $registro_cliente[2], $registro_cliente[3]";
print " $registro_cliente[4], $registro_cliente[5]";

$json = json_encode($registro_cliente);

echo '<pre>';
print $json;
echo '</pre>';

foreach ($registro_cliente as $propertie) {
  echo '<p>' . $propertie . '</p>';
}

