<?php

function
WhoAreYou():
String {
	$FirstName = func_get_arg(0);
	$Surname = func_get_arg(1);
	
	$FirstName = 'Bob';
	$Surname = 'Magic';
	
	print_r(func_get_args());
	
	return "{$FirstName} {$Surname}";
}

echo WhoAreYou('Jean Luc','Picard'), PHP_EOL;
