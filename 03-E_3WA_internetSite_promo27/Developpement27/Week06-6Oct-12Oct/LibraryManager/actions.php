<?php

if (isset($_POST['action']) && $_POST['action'] === 'bookAdd')
{
	$queryString = "INSERT INTO books (book_title, author_name) VALUES (:bookTitle, :authorName)";
	
	$statementObject = $PDOObject->prepare($queryString);
	
	$boundValuesArray = [
		"bookTitle" => $_POST['bookTitle'],
		"authorName" => $_POST['authorName']
	];

	$statementObject->execute($boundValuesArray);

	header("Location: index.php");
}

if (isset($_POST['action']) && $_POST['action'] === 'bookUpdate')
{
	$queryString = "UPDATE books SET book_title = :bookTitle, author_name = :authorName WHERE book_id = :bookId";
	
	$statementObject = $PDOObject->prepare($queryString);
	
	$boundValuesArray = [
		"bookId" => $_GET['bookId'],
		"bookTitle" => $_POST['bookTitle'],
		"authorName" => $_POST['authorName']
	];

	$statementObject->execute($boundValuesArray);

	header("Location: index.php");
}

if (isset($_GET['action']) && $_GET['action'] === 'bookDelete')
{
	$queryString = "DELETE FROM books WHERE book_id = :bookId";
	
	$statementObject = $PDOObject->prepare($queryString);
	
	$boundValuesArray = [
		"bookId" => $_GET['bookId']
	];

	$statementObject->execute($boundValuesArray);

	header("Location: index.php");
}

$booksArray = [];
$result = $PDOObject->query("SELECT * FROM books");
while ($rowArray = $result->fetch())
{
	$booksArray[] = $rowArray;
}
