<?php


function GetCurrentPageOld() {
	return (isset($_GET['Page']))?
		((int)$_GET['Page']):
		(1);
}

function GetCurrentPageNew(): Int {
	return $_GET['Page'] ?? 1;
}

$_GET['Page'] = 42;
var_dump(GetCurrentPageNew());

unset($_GET['Page']);
var_dump(GetCurrentPageNew());
