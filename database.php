<?php

Class Database {
	private $conn;

	function __construct($servername = "localhost", $username = "root", $password = "", $database = "shop"){
		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    		// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
	function __destruct() {
		$this->conn = null;
	}

	public function select_array($sql) {
		$request = $this->conn->prepare($sql); 
		$request->execute();

		$result = $request->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function select($sql) {
		$request = $this->conn->prepare($sql); 
		$request->execute();

		$result = $request->fetchAll(PDO::FETCH_ASSOC);
		return $result[0];
	}

	public function insert_hard($t, $f, $v) {
		
		$sql = "INSERT INTO $t (";
		foreach ($f as $column) {
			$sql .= $column . ",";
		}
		$sql = rtrim($sql, ",");
		$sql .= ") VALUES (";
		foreach ($v as $value) {
			$sql .= "'" .$value . "', ";
		}
		$sql = rtrim($sql, ", ");
		$sql .=")";
		echo $sql;
		die();

		$request = $this->conn->prepare($sql); 
		$request->execute();
	}
	public function insert_easy($sql) {
		$request = $this->conn->prepare($sql); 
		$request->execute();
	}

}

function show($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


$db = new Database();
show($db->select("SELECT*FROM products"));
$fields = ["id", "name", "price", "description", "weight", "qty"];
$values = ["29", "padangos", "100", "bridgestone", "2000", "3"];
$db->insert_hard("products", $fields, $values);

?>