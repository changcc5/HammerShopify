<?php

class ShopifyView {
	function __constructor() {
	
	}
	
	public function getPage($page='home', $data='null') {
		$page = '<!DOCTYPE html>
		<html>
		<head>
		' . $this->getHead($page, $data) . '
		</head>
		<body>
		' . $this->getBody($page, $data) .'
		</body>
		</html>
		';
		return $page;
	}
	public function getHead($page, $data) {
		
	}
	
	public function getBody($page, $data) {
		switch ($page) {
			case 'home':
				$body = '
				<ul>
					<li><a href="../Controller/Landing.php?page=inventory">Inventory</a></li>
					<li><a href="../Controller/Landing.php?page=report">Reports</a></li>
				</ul>
				';
				break;
			case 'inventory':
				$body = '
				<table>
				
				</table>
				';
				break;
			default:
				
				break;
		}
		
		return $body;
	}
}

?>