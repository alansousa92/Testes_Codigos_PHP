<?php

$produtos = array(
	'paper' => array(
		'copier' => 'Copier & Multipurpose',
		'inkjet' => 'Inkjet Printer',
		'laser' => 'Laser Printer',
		'photo' => 'Photographic Paper'
	),

	'pens' => array(
		'ball' => 'Ball Pointe',
		'hilite' => 'Highlighters',
		'marker' => 'Markers'
	)


);

echo "<pre>";
	foreach($produtos as $sessoes => $items){
		foreach($items as $keys => $valor){
			echo "$sessoes:\t$keys\t$valor<br>";
		}
	}
echo "</pre>";

echo $produtos['paper']['photo'];