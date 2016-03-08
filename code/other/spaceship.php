<?php

class Person {
	
	protected
	$FirstName;
	
	public function
	GetFirstName() {
		return $this->FirstName;
	}
	
	////////
	////////
	
	protected
	$Surname;
	
	public function
	GetSurname() {
		return $this->Surname;
	}
	
	////////
	////////

	public function
	__Construct(String $FirstName, String $Surname) {
		list(
			$this->FirstName,
			$this->Surname
		) = func_get_args();
		
		return;
	}

	////////
	////////
	
	public function
	GetName() {
		return "{$this->FirstName} {$this->Surname}";
	}

	public function
	GetRosterName() {
		return "{$this->Surname}, {$this->FirstName}";
	}

}

$People = [
	new Person('William','Riker'),
	new Person('Jean-Luc','Picard'),
	new Person('Bob','Magic'),
	new Person('Geordi','La Forge'),
	new Person('Thomas','Riker'),
	new Person('Worf','Son of Mogh')
];

usort($People,function($A,$B){
	return
	($A->GetSurname() <=> $B->GetSurname())?:
	($A->GetFirstName() <=> $B->GetFirstName());
});

foreach($People as $Person)
echo $Person->GetRosterName(), PHP_EOL;
