<?php
require_once '../Model/ShopifyModel.php';
require_once '../View/ShopifyView.php';

$page = new ShopifyView();

echo $page->getPage();
?>