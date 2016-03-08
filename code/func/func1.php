<?php

function
WhoAreYou(String $FirstName, String $Surname):
String {
	$FirstName = 'Bob';
	$Surname = 'Magic';
	
	print_r(func_get_args());
	
	return "{$FirstName} {$Surname}";
}

echo WhoAreYou('Jean Luc','Picard'), PHP_EOL;
