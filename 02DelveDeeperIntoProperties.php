<?php

//Tutorial Available from:
//http://www.elated.com/articles/object-oriented-php-delving-deeper-into-properties-and-methods/

//This is an example of a Constructor
//-----------------------------------
class Member {
	
	private $username;
	private $location;
	private $homepage;
	
	public function __construct($username, $location, $homepage) {
		$this->username = $username;
		$this->location = $location;
		$this->homepage = $homepage;
	}
	
	public function showProfile() {
		echo "<dl>";
		echo "<dt>Username:</dt><dd>$this->username</dd>";
		echo "<dt>Location:</dt><dd>$this->location</dd>";
		echo "<dt>Homepage:</dt><dd>$this->homepage</dd>";
		echo "</dl>";
	}
}

$aMember = new Member ( "fred", "Chicago", "http://example.com" );
$aMember->showProfile();

//This is an example of a deconstructor
//-------------------------------------

class MyClass {
	
	public $Hello = "Hi there<br>";
	
	public function __destruct() {
		echo "I'm about to disappear - bye bye!";
		//(Clean things up here)
	}
}

$myObject = new MyClass();
echo $myObject->Hello;
exit;
unset( $myObject ); //Displays the echo within destroy

?>