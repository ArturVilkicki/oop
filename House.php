<?php
class House {
	public $area;
	public $pool;
	public $garage;
	public $price;
	private $owner;
	private $wc;

	public function __construct($a1,$a2) {
		$this->owner = $a1;
		$this->wc = $a2;

		echo $this->owner . " just build " . $this->wc . "<br>";
	}

	public function __set($parameter, $value) {
		echo "Someone changed $parameter of my house to $value<br>";
		$this->$parameter = $value;
	}
	public function __get($parameter) {
		echo "Someone is checking the $parameter of this house<br>";
		return $this->$parameter;
	}

	public function eat($where) {
		echo "Someone is eating on $where <br>";
	}
	public function build($what) {
		echo "Someone build $what in house <br>";

	}
	public function clean($where) {
		echo "Someone is cleaning $where <br>";
		
	}
	public function watch($what) {
		echo "Someone is watching $what <br>";
	}
	public function listen($what) {
		echo "Someone is watching $what <br>";
	}
	public function repair($what) {
		echo "Someone is repairing $what <br>";
	}
}

?>