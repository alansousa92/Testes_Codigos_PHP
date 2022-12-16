<?php

$games = ['Mortal Kombat', 'Super Mario Broz', 'God of War', 'Call of Duty'];

var_dump($games);

usort($games, function($a, $b) {

    return strlen($a) <=> strlen($b);
});

var_dump($games);
 
