<?php
$servername = "localhost";
$username = "root";
$password = "Dell143$";

$con = new PDO("mysql:host=$servername;dbname=Shopify", $username, $password); 

function ViewInventory() {
	try{
			$sql = "SELECT * FROM Inventory ORDER BY item_no;";
			$result = $con->query($sql);
			return $result;
		}
		catch(PDOException $e)
	    {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
}

class ShopifyModel {
	public $conn;
	function __construct() {
		try {
		    $this->conn = new PDO("mysql:host=localhost;dbname=Shopify", "root", "Dell143$");
		    // // set the PDO error mode to exception
		    // $this->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    // $sql = "SELECT * FROM Inventory ORDER BY item_no;";
		    // // use exec() because no results are returned
			// foreach ($this->$conn->query($sql) as $row) {
		        // print $row['nam'] . "\t";
		        // print $row['item_no'] . "\n";
		    // }
		    }
		catch(PDOException $e)
		    {
		    // echo $sql . "<br>" . $e->getMessage();
		    }
		
		$conn = null;
	}
	
	public function UpdateInventory($item_no, $fields, $value) {
		foreach ($fields as $key => $field) {
			$sql = $conn->prepare('UPDATE Inventory Set ? = ? WHERE item_no = ?;');
			
			// $sql->execute(array($field))
		}
	}
	public function NewInventory($data) {
		
	}
	public function DeleteInventory($item) {
		
	}
	public function ViewInventory() {
		try{
			$sql = "SELECT * FROM Inventory ORDER BY item_no;";
			$result = $this->conn->query($sql);
			return $result;
		}
		catch(PDOException $e)
	    {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
	public function RunReport($fields) {
		
	}
}
?>