<?php
class Dog {
	private $owner;
	private $name;
	public $size;
	public $color;
	public $farm;
	public $breed;

	public function __construct($a1,$a2) {
		$this->owner = $a1;
		$this->name = $a2;

		echo $this->owner . " just got a dog named " . $this->name . "<br>";
	}


	public function walk($where) {
		echo "The dog is walking on $where <br>";
	}
	public function eat($what) {
		echo "The dog is eating $what <br>";

	}
	public function sleap($where) {
		echo "The dog is sleaping in $where <br>";
		
	}
	public function destroy($what) {
		echo "The dog is shiting $what <br>";
	}
	public function shit($where) {
		echo "The dog is destroying $where <br>";
	}
	public function bark($at) {
		echo "The dog is barking $at <br>";
	}
}






?>