<?php

function
WhoAreYou(String $FirstName, String $Surname):
String {
	var_dump($FirstName,$Surname);	
	return trim("{$FirstName} {$Surname}");
}

echo WhoAreYou('Bob','Magic'), PHP_EOL;
echo WhoAreYou(42,42), PHP_EOL;

