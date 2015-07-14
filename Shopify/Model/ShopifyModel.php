<?php
$servername = "localhost";
$username = "root";
$password = "Dell143$";

class CustomPDO {
	private $conn;
	function __construct() {
		try {
		    $conn = new PDO("mysql:host=$servername;dbname=Shopify", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $sql = "SELECT * FROM Inventory ORDER BY item_no;";
		    // use exec() because no results are returned
			foreach ($conn->query($sql) as $row) {
		        print $row['nam'] . "\t";
		        print $row['item_no'] . "\n";
		    }
		    }
		catch(PDOException $e)
		    {
		    echo $sql . "<br>" . $e->getMessage();
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
	
	public function RunReport($fields) {
		
	}
}
?>