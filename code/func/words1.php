<?php

class Whatever {
	
	public function
	Print() {
		echo __METHOD__, PHP_EOL;	
	}
	
	public function
	ForEach() {
		echo __METHOD__, PHP_EOL;
	}
	
	public function
	List() {
	/*//
	this is the one that always used to piss me off the most
	when working on objects for storage and widgeting.
	//*/
		echo __METHOD__, PHP_EOL;
	}

}

$Whatever = new Whatever;

foreach(get_class_methods(get_class($Whatever)) as $Method)
$Whatever->{$Method}();
