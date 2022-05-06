<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			//$funcionarios = ['joão', 'maria', 'julia'];

			$funcionarios = [
				array('nome' => 'joão', 'salario' => 2500),
				array('nome' => 'maria', 'salario' => 3000),
				array('nome' => 'julia', 'salario' => 2200),
			];

			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';

			/*
			foreach($funcionarios as $idx => $nome_funcionarios){
				echo "ID $idx - Nome: $nome_funcionarios<br>";
			}
			*/

			

		?>
	</body>
</html>