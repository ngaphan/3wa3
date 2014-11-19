<?php
	/**
	 * Enregistre un tableau à une dimension dans un fichier CSV.
	 *
	 * @param	string	$filePath	Chemin du fichier CSV
	 * @param	array	$dataArray	Tableau à enregistrer
	 * 
	 * @return	void
	 */
	function saveArrayToCSVFile($filePath, $dataArray)
	{
		// On ouvre le fichier $filePath en lecture et écriture
		// et on place le pointeur ($handle) à la fin du fichier
		// (si le fichier n'existe pas, il sera créé)
		$handle = fopen($filePath, "a+");
		
		// On écrit la nouvelle ligne CSV
		// représentant le tableau à une dimension $dataArray
		fputcsv($handle, $dataArray);

		// On ferme le pointeur à la fin pour éviter
		// de surcharger la mémoire vive
		fclose($handle);
	}

	/**
	 * Enregistre tous les tableaux contenus dans le tableau $dataArray
	 * (ce qui en fait donc un tableau à deux dimensions)
	 * dans un fichier CSV.
	 *
	 * @param	string	$filePath	Chemin du fichier CSV
	 * @param	array	$dataArray	Tableau des tableaux à enregistrer
	 * 
	 * @return	void
	 */
	function saveAllArraysToCSVFile($filePath, $dataArray)
	{
		// On ouvre le fichier $filePath en lecture et écriture,
		// on efface tout son contenu,
		// et on place le pointeur ($handle) au début du fichier
		// (logique puisqu'il est vide)
		$handle = fopen($filePath, "w+");
		
		// On utilise une boucle pour écrire ligne à ligne dans le fichier
		// chacun des tableaux contenus dans le fichier CSV
		foreach ($dataArray as $lineArray)
		{
			// On écrit le tableau en cours $lineArray,
			// lui-même élément du "grand" tableau $dataArray,
			// à partir du pointeur $handle (dans le fichier $filePath)
			// (au format CSV)
			fputcsv($handle, $lineArray);
		}

		// On ferme le pointeur à la fin pour éviter
		// de surcharger la mémoire vive
		fclose($handle);
	}

	/**
	 * Crée un tableau à deux dimensions à partir du contenu d'un fichier CSV :
	 * chaque ligne du fichier devient un tableau,
	 * lui-même devenant un élément du tableau $dataArray.
	 *
	 * @param	string	$filePath	Chemin du fichier CSV
	 * 
	 * @return	array	Tableau à deux dimensions des données CSV
	 */
	function getArrayFromCSVFile($filePath)
	{
		// On initialise notre "grand" tableau
		$dataArray = [];

		// On ouvre le fichier $filePath en lecture seule
		// et on place le pointeur ($handle) au début du fichier
		$handle = fopen($filePath, "r");
		
		// On utilise une boucle pour lire ligne à ligne dans le fichier
		// chacun des tableaux contenus dans le fichier CSV
		while ( ($fileLineArray = fgetcsv($handle)) == true )
		{
			// On ajoute à la fin du tableau $dataArray
			// le tableau $fileLineArray (tableau dans un tableau),
			// $fileLineArray étant le tableau représentant la ligne CSV en cours
			array_push($dataArray, $fileLineArray);
		}

		// On ferme le pointeur à la fin pour éviter
		// de surcharger la mémoire vive
		fclose($handle);

		// On retourne le tableau à deux dimensions
		return $dataArray;
	}
?>