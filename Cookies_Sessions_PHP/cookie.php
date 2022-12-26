<?php

/*
 * Cookies são um mecanismo para armazenar dados no navegador remoto
 * e assim rastrear ou identificar usuarios que retornam. Cookies fazem
 * parte do cabeçalho HTTP. Qualquer cookie enviado para o servidor pelo
 * cliente será automaticamente incluido no array global $_COOKIE
 *
 * Para criar cookies use as funções setcookie() ou setrawcookie().
 * setcookie() deve ser chamada antes que qualquer saída seja enviada
 * ao navegador.
 *
 * Voce pode definir dados especificos para serem armazenados no navegados,
 * e recuperar essesa dados quando o usuario visitar osite de novo.
 */

setcookie('name', 'alan', time() + 86400);

if(isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);
