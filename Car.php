<?php
class Car {
	public static $count;
	private $color;
	public $make;
	public $model;
	public $fuel;
	public $license;
	private $owner;

	public function __construct($a1, $a2) {
		Car::$count++;
		$this->license = $a1;
		$this->owner = $a2;
		echo $this->owner ." has stolen a car with license plate " .$this->license ."<br>";
	}

	public function __set($parameter, $value) {
		echo "Someone changed $parameter of my car to $value<br>";
		$this->$parameter = $value;
	}
	public function __get($parameter) {
		echo "Someone is checking the $parameter of this car<br>";
		return $this->$parameter;
	}

	public function go() {
		echo $this->owner ."is driving a car. <br>";
	}

	public function crash() {
		echo "Just crashed <br>";
	}

	public function repair() {
		echo "This car was repaired! <br>";
	}
	public static show_count(){
		
	}



}

?>