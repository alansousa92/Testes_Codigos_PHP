<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programação POO</title>
</head>
<body>
	<?php
	# noticia_heranca.php

	include_once 'exec9.php';

	class NoticiaPrincipal extends Noticia {
		public $imagem;

		function setImagem($valor){
			$this->imagem = $valor;
		}

		function exibeNoticia(){

			echo "<center>";
			echo "<img width=\"200px;\" src=\"".$this->imagem."\"><p>";
			echo "<b>".$this->titulo."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}

	$not = new NoticiaPrincipal();
	$not->titulo = 'Vestibular da unicamp termina nessa sexta';
	$not->texto = 'Um dos maiores do pais, ';
	$not->texto .= 'com numero recorde de inscritos';
	$not->imagem = 'PHP.jpg';
	$not->exibeNoticia();

	?>

</body>
</html>