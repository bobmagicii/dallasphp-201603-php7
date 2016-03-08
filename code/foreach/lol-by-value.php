<?php

// this code will double the size the data array.

// this happens because the foreach started running on the loop and then
// we modify it, causing a copy-on-write to proc giving us a new dataset
// than the one that is iterating.

$Data = range(1,10);

foreach($Data as $Key => $Value)
$Data[] = $Value;

printf(
	'Key: %d, Value: %d%s',
	key($Data),
	current($Data),
	PHP_EOL
);

print_r($Data);
