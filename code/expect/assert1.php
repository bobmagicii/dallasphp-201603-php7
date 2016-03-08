<?php

$Result = false;

assert(
	($Result instanceof FilesystemIterator),
	(new Exception('We did not get our iterator.'))
);

echo "Whatevs", PHP_EOL;
