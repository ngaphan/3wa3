<?php

if (!isset($_GET['id']) || empty($_GET['id']))
{
	include ROOT.'view/404.php';
	die;
}

$ProductManager = new ProductManager($DB);
$product = $ProductManager->getProductById($_GET['id']);

if (empty($product))
{
	include ROOT.'view/404.php';
	die;
}


$messagesFlash = new MessageFlash();


$CommentaireManager = new CommentaireManager($DB);
$commentaires = $CommentaireManager->getCommentaires($_GET['id']);