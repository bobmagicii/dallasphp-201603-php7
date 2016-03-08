<?php

// > php train.php

// this will print a train, unless your terminal or terminal font sucks at
// which case you will see unicode garbage.

function TrainEngine() {
	yield "\u{1F682}";
};

function TrainPayload() {
	for($Iter = 0; $Iter < 2; $Iter++)
	yield "\u{1F683}";
};

$Train = (function() {
	yield from TrainEngine();
	yield from TrainPayload();
	return 'Choo Choo I ams an Trains';	
})();

foreach($Train as $Val)
echo $Val;

echo PHP_EOL, $Train->GetReturn(), PHP_EOL;
