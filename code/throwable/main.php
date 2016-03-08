<?php

// > php main.php

// this will catch the syntax error and use the exception catching Error
// as the printer for the error.

try {
	require('include-with-syntax-error.php');
}

catch(Exception $Error) {
	echo "Something Failed:", PHP_EOL;
	echo $Error->GetMessage();
}

catch(Error $Error) {
	echo "Oh Freaking Snap:", PHP_EOL;
	echo $Error->GetMessage();
}
