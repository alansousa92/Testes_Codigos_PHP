<?php

/* Sessões em PHP: consiste de uma maneira de preservar dados atraves de acessos
 * subsequentes. Isso permite a criação de aplicaçoes mais personalizadas e aumenta
 * o apelo do seu web site.
 *
 * Um visitante acessando seu website ganha um identificador unico, o assim chamado
 * id de sessão. Ele é salvo em um cookie do lado do usuario ou propagado via URL.
 *
 * Sessoes são um jeito de armazenar informações em variaveis para serem usadas em
 * varias paginas. Ao contrario dos cookies, sessoes são armazenadas no servidor.
 */

session_start();

if(isset($_POST['enviar'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

  $password = $_POST['password'];

  if($username == 'alan' && $password == '37261248') {
    $_SESSION['username'] = $username;
    header('Location:  helloWorld.php');
  } else {
    echo '<h3>Login Incorreto</h3>';
    echo '<a href="sessions.php">Voltar</a>';
  }
}

?>
<html>
<body>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
<label for='username'>Username: </label>
<input type='text' name='username'>
<br>
<label for='password'>Password: </label>
<input type='password' name='password'>
<br>
<input type='submit' value='enviar' name='enviar'>

</form>
</body>
</html>

