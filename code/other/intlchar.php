<?php

echo 'Codepoint for Train Is: ',
     dechex(IntlChar::CharFromName('STEAM LOCOMOTIVE')),
	 PHP_EOL,
	 PHP_EOL;

foreach(['@','1','a','!'] as $Char) {
	echo "Testing {$Char}", PHP_EOL;
	printf(
		'AlphaNum(%s) Digit(%s) Punctuation(%s)%s',
		(IntlChar::IsAlNum($Char))?('yes'):('no'),
		(IntlChar::IsDigit($Char))?('yes'):('no'),
		(IntlChar::IsPunct($Char))?('yes'):('no'),
		PHP_EOL
	);

	echo PHP_EOL;
}

