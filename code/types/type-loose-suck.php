<?php

// this demonstrates that if the number does not parse with is_numeric
// that it is probably going to fuck up an integer typehint.

function
FilterPageNumber(Int $Page):
Int {
	if($Page < 1) $Page = 1;
	
	return $Page;
}

var_dump(FilterPageNumber(42));
var_dump(FilterPageNumber('42'));
var_dump(FilterPageNumber('adfaf'));
