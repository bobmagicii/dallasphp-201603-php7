<?php

function
WhoAreYou(String $FirstName, String $Surname=null):
String {
	var_dump($FirstName,$Surname);	
	return trim("{$FirstName} {$Surname}");
}

echo WhoAreYou('Bob'), PHP_EOL;

