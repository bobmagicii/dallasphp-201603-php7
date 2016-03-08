<?php

function WhoAreYou() {
	list($FirstName, $Surname) = func_get_args();
	
	$FirstName = 'Bob';
	$Surname = 'Magic';
	
	print_r(func_get_args());
	
	return "{$FirstName} {$Surname}";
}

echo WhoAreYou('Jean Luc','Picard'), PHP_EOL;
