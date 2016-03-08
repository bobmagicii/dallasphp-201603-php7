<?php

$Hex = '0xf';

var_dump(filter_var(
	$Hex,
	FILTER_VALIDATE_INT,
	FILTER_FLAG_ALLOW_HEX
));

var_dump(hexdec($Hex));

var_dump(is_numeric($Hex));
