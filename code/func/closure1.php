<?php

$Func = function() {
	$this->Guffaw();
	return;	
};

$Func->Call(new class{
	public function
	Guffaw() {
		echo 'roflmao', PHP_EOL;
		return;
	}
});
