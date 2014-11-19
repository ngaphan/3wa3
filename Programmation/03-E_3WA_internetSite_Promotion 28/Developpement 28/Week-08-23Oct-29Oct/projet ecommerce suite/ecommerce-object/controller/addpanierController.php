<?php

if(isset($_POST) && !empty($_POST))
{
	if (isset($_POST['qty'],$_POST['id_produit']) && !empty($_POST['id_produit']) && !empty($_POST['qty']))
	{
			$cart = new Panier();
			$cart->add($_POST['id_produit'], intval($_POST['qty']));
			
			header('Location:index.php?page=panier');
			die();
	}

}

header('Location:index.php');
die;