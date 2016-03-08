<?php

for($A = 0; $A < 5; $A++)
echo join(' ', str_split(bin2hex(
	random_bytes(10)
),2)), PHP_EOL;

for($A = 0; $A < 5; $A++)
echo random_int(PHP_INT_MIN, PHP_INT_MAX), PHP_EOL;
