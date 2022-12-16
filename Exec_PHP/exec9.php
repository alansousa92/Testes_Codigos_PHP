<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programação POO</title>
</head>
<body>
	<?php

	# noticia.class.php

	class Noticia {
		public $titulo;
		public $texto;

		function setTitulo($valor){
			$this->titulo = $valor;
		}

		function setTexto($valor){
			$this->texto = $valor;
		}

		function exibeNoticia(){
			echo "<center>";
			echo "<br>".$this->titulo."</br>";
			echo $this->texto;
			echo "</center>";
		}
	}

	$not = new Noticia();
	$not->setTitulo('Novo curso de PHP orientado a objetos(Avançado)');
	$not->setTexto('Este curso contem os seguintes topicos: POO, XML e etc');
	//$not->titulo = 'Novo curso de PHP orientado a objetos(Avançado)';
	//$not->texto = 'Este curso contem os seguintes topicos: POO, XML e etc';
	$not->exibeNoticia();
	?>

</body>
</html>