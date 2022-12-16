<?php
declare(strict_types=1);

function validate_primeiro_nome(string $value) : string {

    if ((strlen($value) <= 0) || (strlen($value) > 15)) {
        throw new Exception('Primeiro nome invalido!');
    }

    return $value;
}

function validate_sobrenome(string $value) : string {

    if ((strlen($value) <= 0) || (strlen($value) > 20)) {
        throw new Exception('Sobrenome invalido!');
    }

    return $value;
}

function validate_endereco(string $value) : string {

    if ((strlen($value) <= 0) || (strlen($value) > 30)) {
        throw new Exception('Endereço invalido!');
    }

    return $value;
}

function validate_cidade(string $value) : string {

    if ((strlen($value) <= 0) || (strlen($value) > 20)) {
        throw new Exception('Cidade invalido!');
    }

    return $value;
}

function validate_estado(string $value) : string {

    if ((strlen($value) <= 0) || (strlen($value) > 2)) {
        throw new Exception('Estado invalido!');
    }

    return $value;
}

/*
function validate_cep(string $value) : string {

    if ((strlen($value) <= '11111') || (strlen($value) > '99999')) {
        throw new Exception('CEP invalido!');
    }

    return $value;
}
 */
