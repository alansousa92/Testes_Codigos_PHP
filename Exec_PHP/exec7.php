<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste Formulario PHP</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
		Name:<input type="text" name="name" placeholder="Escreva seu nome..."><br>
		<input type="submit" name="submit" value="Me aperte!">
	</form>
	<br>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			//COLETA O VALOR DO CAMPO DE ENTRADA
			$name = $_GET['name'];

			if (empty($name)) {
				echo 'A variavel $name é vazia'."<br>";
			}else{
				echo "$name <br>";
			}
		}

	?>

</body>
</html>