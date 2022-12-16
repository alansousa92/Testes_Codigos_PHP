<?php
# noticia_construct.class.php

class Noticia {
	public $titulo;
	public $texto;

	function __construct($valor_tit, $valor_txt){
		$this->titulo = $valor_tit;
		$this->texto = $valor_txt;
	}

	function exibeNoticia(){
		echo "<center>";
		echo "<b>".$this->titulo."</b><p>";
		echo $this->texto;
		echo "</center><p>";
	}
}

$not = new Noticia('Curso avançado de PHP','Abordaremos: POO, XML, etc');
$not->exibeNoticia();