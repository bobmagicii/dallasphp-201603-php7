<?php

function Elitist($Found) {	
	$Map = [
		'your'=>'ur', 'help'=>'halp',
		'a'=>'4', 'e'=>'3', 'o'=>'0', 's'=>'5', 't'=>'7',
		'h' => '|-|', 'n'=>'|\|', 'm'=>'|\/|', 'p'=>'|*', 'r'=>'|^', 'u'=>'|_|'
	];

	return $Map[strtolower($Found)] ?? $Found;
}

$Original = 'Another settlement needs your help!';
$Altered = preg_replace_callback_array([
	'/\w+/'    => function($Match) { return Elitist($Match[0]); },
	'/[a-z]/i' => function($Match) { return Elitist($Match[0]); }
],$Original);

echo $Original, PHP_EOL;
echo $Altered, PHP_EOL;
