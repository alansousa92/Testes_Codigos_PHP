<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
        
    $registros = array(
			array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
			array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
			array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
		);

	    echo "<pre>";
		print_r($registros);
		echo "</pre>";
        echo "<br><br><br>\n\n\n";


		echo 'O array possui '.count($registros).' registros';
		echo "<br>\n";
		$idx = 0;
    /*
		while ($idx < count($registros)) {
			
			echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
			echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
			echo '<hr/>';
			$idx++;
		}
    */

	/*
    do{
			echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
			echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
			echo '<hr/>';
			$idx++;

		} while($idx < count($registros));
	*/

	for ($idx = 0; $idx < count($registros) ; $idx++ ){
			echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
			echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
			echo '<hr/>';

		}
    
    ?> 
  </body>
</html>
