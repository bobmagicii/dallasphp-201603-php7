<?php

// by reference arrays will alter the original array mid-loop.

// this code will generate a fatal error where php runs out of ram to
// allocate as we have extended this array at the same rate that it
// is iterating it.

$Data = range(1,10);

foreach($Data as &$Value)
$Data[] = $Value;

printf(
	'Key: %d, Value: %d%s',
	key($Data),
	current($Data),
	PHP_EOL
);

print_r($Data);
