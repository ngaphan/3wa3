 <?php
	/*
		Si l'utilisateur envoie le formulaire d'ajout de tache,
		on enregistre cette dans tache dans le fichier CSV "tasks.csv"
	 */
	if (isset($_POST['action']) === true && $_POST['action'] === "addTask")
	{
		// On crée un array "propre" pour la nouvelle tache
		// à partir des données récupérées à partir du formulaire
		// grâce à la méthode $_POST
		$taskArray = [
			$_POST['taskTitle'],
			$_POST['taskDescription'],
			$_POST['taskDate']
		];

		// On appelle la fonction saveArrayToCSVFile($filePath, $dataArray)
		// qui est dans le fichier "utilities.php"
		// pour ajouter la nouvelle ligne CSV dans le fichier "tasks.csv"
		saveArrayToCSVFile("tasks.csv", $taskArray);

		// On redirige l'utilisateur sur la page d'accueil
		header("Location: index.php");
	}

	/*
		Si l'utilisateur est sur la page de modification de tache,
		on récupère cette tache à partir du fichier CSV "tasks.csv"
	 */
	if (isset($_GET['action']) === true && $_GET['action'] === "editTask")
	{
		// On récupère les données à partirs du fichier CSV
		// sous la forme d'un tableau à deux dimensions
		$tasksArray = getArrayFromCSVFile("tasks.csv");

		// On crée un array dans lequel on récupère la tache
		// (représentée par un tableau)
		// que l'utilisateur veut éditer
		$taskArray = $tasksArray[$_GET["taskIndex"]];
	}

	/*
		Si l'utilisateur envoie le formulaire de modification de tache,
		on enregistre cette dans tache dans le fichier CSV "tasks.csv"
	 */
	if (isset($_POST['action']) === true && $_POST['action'] === "updateTask")
	{
		// On crée un array "propre" pour la tache modifiée
		// à partir des données récupérées à partir du formulaire
		// grâce à la méthode $_POST
		$taskArray = [
			$_POST['taskTitle'],
			$_POST['taskDescription'],
			$_POST['taskDate']
		];
		
		// On récupère les données à partirs du fichier CSV
		// sous la forme d'un tableau à deux dimensions
		$tasksArray = getArrayFromCSVFile("tasks.csv");

		// On modifie la tache concernée dans le tableau des taches
		$tasksArray[$_GET["taskIndex"]] = $taskArray;

		// On appelle la fonction saveAllArraysToCSVFile($filePath, $dataArray)
		// qui est dans le fichier "utilities.php"
		// pour mettre à jour le fichier "tasks.csv"
		saveAllArraysToCSVFile("tasks.csv", $tasksArray);

		// On redirige l'utilisateur sur la page d'accueil
		header("Location: index.php");
	}

	/*
		Si l'utilisateur supprime une tache,
		on supprime cette tache du fichier CSV "tasks.csv"
	 */
	if (isset($_GET['action']) === true && $_GET['action'] === "deleteTask")
	{
		// On récupère les données à partirs du fichier CSV
		// sous la forme d'un tableau à deux dimensions
		$tasksArray = getArrayFromCSVFile("tasks.csv");

		// On supprime la tache concernée dans le tableau des taches
		unset($tasksArray[$_GET["taskIndex"]]);

		// On appelle la fonction saveAllArraysToCSVFile($filePath, $dataArray)
		// qui est dans le fichier "utilities.php"
		// pour mettre à jour le fichier "tasks.csv"
		saveAllArraysToCSVFile("tasks.csv", $tasksArray);

		// On redirige l'utilisateur sur la page d'accueil
		header("Location: index.php");
	}

	/*
		Si on est sur la page d'accueil ($_GET["action"] n'existe pas),
		on charge la liste des taches sous la forme d'un tableau
		pour pouvoir l'utiliser dans home.php
	 */
	if (isset($_GET['action']) === false)
	{
		// On récupère les données à partirs du fichier CSV
		// sous la forme d'un tableau à deux dimensions
		$tasksArray = getArrayFromCSVFile("tasks.csv");

		// On récupère l'ensemble des dates (de chaque tache)
		// dans le même ordre que les indices du tableau
		$tasksDatesArray = [];
		for ($index=0; $index<count($tasksArray); $index++)
		{
			array_push($tasksDatesArray, $tasksArray[$index][2]);
		}

		// Maintenant que l'on a un tableau $tasksDatesArray
		// pour lequel chaque indice (créé automatiquement : 0, 1, 2, etc)
		// correspond à l'indice de la tache dans le tableau $tasksArray,
		// on ordonne ce tableau par date descendante
		// (de la plus ancienne à la plus future).
		// On prend bien attention à utiliser une fonction "associative"
		// (= qui conserve les indices associés à chaque date)
		asort($tasksDatesArray);
	}
?>