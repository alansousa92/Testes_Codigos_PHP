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

			// foreach ($funcionarios as $valueIndex) {
			// 	foreach ($valueIndex as $key => $value) {
			// 		echo $key." - ".$value."<br>";
			// 	}
			// }
			
			for($i = 0; $i < count($funcionarios); $i++) {

				for($j = 0; $j < count($funcionarios[$i]); $j++) {
					
					echo $funcionarios[$i][$j];

				}
			}

		?>
	</body>
</html>