<?php
require_once '../Model/ShopifyModel.php';
require_once '../View/ShopifyView.php';

$page = new ShopifyView();
$model = new ShopifyModel();

// if(!empty($_GET['page'])) {
	// switch (strip_tags($_GET['page'])) {
		// case 'inventory':
			// echo $page->getPage('inventory',$inventory);
			// break;
// 		
		// default:
// 			
			// break;
	// }
// }
echo $page->getPage();
?>