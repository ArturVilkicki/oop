<?php
include "database.php";
$db = new Database ();
$products = $db->select_array("SELECT * FROM products");

foreach ($products as $product) {
	echo $product["name"] . "<br>";
}
//include "Dog.php";
//include "House.php";
/*
$arturo_automobilis = new Car("RAP 001", "Arturas");

$arturo_automobilis->color = "red";
$arturo_automobilis->make = "BMW";
$arturo_automobilis->model = "5er";
$arturo_automobilis->fuel = "petrol";



//var_dump($arturo_automobilis);
//echo $arturo_automobilis->license;

$marytes_automobilis = new Car("MARYT3", "Maryte");


$arturo_automobilis->go();
$arturo_automobilis->crash();
$arturo_automobilis->repair();

echo $arturo_automobilis->owner;
*/
//$owners = ['Ignas', 'Arturas','Petras', 'Adomas'];

//foreach ($owners as $owner) {
	
//}
/*
$dog1 = new Dog("Artur", "Rikis");

$dog1->owner = "Petras";
$dog1->name = "REX";
$dog1->walk("aslsal");
$dog1->eat("sadas");
$dog1->sleap("asadasd");
$dog1->destroy("asadasd");
$dog1->shit("asadasd");
$dog1->bark("asadasd");

echo "<br>";
$house1 = new House("Petras", "Bios");

$house1->eat("aslsal");
$house1->build("sadas");
$house1->clean("asadasd");
$house1->watch("asadasd");
$house1->listen("asadasd");
$house1->repair("asadasd");
*/
//$pirmas = new Car("MARYT3", "Maryte");
//$antras = new Car("MARYT3", "Maryte");
//$trecias = new Car("MARYT3", "Maryte");
//$ketvirtas = new Car("MARYT3", "Maryte");
//$penktas = new Car("MARYT3", "Maryte");
//echo Car::$count;
//Car::show_count();
?>