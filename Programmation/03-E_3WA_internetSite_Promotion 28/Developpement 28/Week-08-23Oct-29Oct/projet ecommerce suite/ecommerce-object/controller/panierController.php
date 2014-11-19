<?php

$panier = new Panier();
if (isset($_GET['action'], $_GET['id']))
{
	if ($_GET['action'] == 'supp')
	{
		$panier->remove((int)$_GET['id']);
	}
	elseif ($_GET['action'] == 'up')
	{
		$panier->add((int)$_GET['id']);
	}
	elseif ($_GET['action'] == 'down')
	{
		$panier->down((int)$_GET['id']);
	}
}

$produitsQuantity = $panier->get();

if ($produitsQuantity)
{
	$id_produits = array_keys($produitsQuantity);

	$produitManager = new ProductManager($DB);
	$produits = $produitManager->getProduitsByIdProduit($id_produits);
}