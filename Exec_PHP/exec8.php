<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario PHP 2</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		Nome:<input type="text" name="name"><br>
		Email:<input type="password" name="email"><br>

		Cerveja:<br>
		<select multiple name="cerveja">
			<option value="Brahma">Brahma</option>
			<option value="Skol">Skol</option>
			<option value="Itaipava">Itaipava</option>
		</select><br>
		<input type="submit" value="Enviar Dados!">
	</form>
	<hr>
	<h2>Dados exibidos</h2>
	<?php

		echo "<p>".$pessoal['name'] = $_POST['name']."</p>";
		echo "<p>".$pessoal['email'] = $_POST['email']."</p>";
		echo "<p>".$cerveja['marca'] = $_POST['cerveja']."</p>";

		// if ($_POST) {
		// 	echo "<pre";
		// 		//echo htmlspecialchars(print_r($_POST));
		// 	echo "</pre>";

		// }
	?>

</body>
</html>