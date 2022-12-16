<?php

$_GET['name'] = 'Alan Santos de Sousa';

# Null coalesce operator

//$name = isset($_GET['name']) ? $_GET['name'] : 'nenhum usuario';
$name = $_GET['name'] ?? 'nenhum usuario';

var_dump($name);
