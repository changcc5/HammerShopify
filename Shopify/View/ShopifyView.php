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
		$head = '
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		 ';
		return $head;
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
				<tr>
					<th>item_no</th><th>descr</th><th>item_vend_no</th><th>prc_1</th><th>lst_cost</th><th>categ_cod</th><th>subcat_cod</th><th>addl_descr_1</th><th>addl_descr_2</th><th>addl_descr_3</th><th>prof_alpha_1</th><th>prof_alpha_2</th><th>prof_alpha_3</th><th>nam</th><th>phone_1</th><th>ap_vend_no</th><th>vend_descr</th><th>vend_item_no</th><th>barcod</th><th>qty_on_hnd</th><th>lst_recv_dat</th><th>lst_sal_dat</th>
				</tr>
				<tr>'; 
				foreach ($data as $key => $value) {
					$body .= '<td>';
					$body .= $value;
					$body .= '</td>';
				}
				$body .= '</tr>
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