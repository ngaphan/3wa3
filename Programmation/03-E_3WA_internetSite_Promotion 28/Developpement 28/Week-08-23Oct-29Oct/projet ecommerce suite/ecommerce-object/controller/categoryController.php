<?php

if (!isset($_GET['idcat']) || empty($_GET['idcat']))
{
	include ROOT.'view/404.php';
	die;
}

$CategorieManager = new CategorieManager($DB);
$productscategorie = $CategorieManager->getProductByCategory($_GET['idcat']);