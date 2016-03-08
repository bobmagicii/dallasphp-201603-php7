<?php

define('CONSTNUMARR',[1,2,3]);
define('CONSTKEYARR',[ 'one' => 1, 'two' => 2, 'three' => 3 ]);

foreach(CONSTNUMARR as $Key => $Val)
echo "{$Key} => {$Val}", PHP_EOL;

foreach(CONSTKEYARR as $Key => $Val)
echo "{$Key} => {$Val}", PHP_EOL;
