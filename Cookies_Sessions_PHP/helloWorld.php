<html>
<body>
<?php
session_start();

if(isset($_SESSION['username'])) {
  echo '<h1>Bem-vindo ' . $_SESSION['username'] . '</h1>';
  echo 'Seu id de sessão: ' . session_id() . '<br>';
}
?>
<h2>Hello World!</h2>
</body>
</html>
