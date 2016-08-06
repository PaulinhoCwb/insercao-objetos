<?php 

class Person 
{
	public $name;
	public $city;
	public $age;

	function __construct($name, $city, $age)
	{
		$this->name = $name;
		$this->city = $city;
		$this->age = $age;
	}
}
 ?>