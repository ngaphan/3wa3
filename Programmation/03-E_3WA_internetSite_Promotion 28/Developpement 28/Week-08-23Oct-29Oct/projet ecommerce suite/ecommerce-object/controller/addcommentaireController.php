<?php

if(isset($_POST) && !empty($_POST))
{
	if (isset($_POST['auteur'],$_POST['note'],$_POST['contenu'],$_POST['id_produit']) && !empty($_POST['id_produit']))
	{
		$errors = [];

		if (empty($_POST['auteur']))
		{
			$errors[] = 'Veuillez entrer un auteur';
		}

		if (empty($_POST['note']))
		{
			$errors[] = 'Veuillez entrer une note';
		}


		if (empty($_POST['contenu']))
		{
			$errors[] = 'Veuillez entrer un contenu';
		}

		if (intval($_POST['note']) > 5)
		{
			$errors[] = 'La note ne doit pas être supérieur à 5';
		}

		$message = new MessageFlash();

		if (empty($errors))
		{
			$commentaireManager = new CommentaireManager($DB);
			$success = $commentaireManager->save($_POST);
			if ($success)
			{
				$message->set('success', "Votre commentaire a bien été ajouté");
			}
			else
			{
				$message->set('error', "Un problème est survenu lors de l'ajout de votre commentaire");
			}
		}
		else
		{
			$message->set('error', $errors);
		}

		header('Location:index.php?page=shopitem&id='.$_POST['id_produit']);
		die;
	}

}

header('Location:index.php');
die;