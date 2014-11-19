<?php
	require_once 'utilities.php';
	require_once 'actions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tasks Manager</title>
    <link rel="stylesheet" href="//ig-css-reset.googlecode.com/git/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	
	<header>
		<h1>Tasks Manager</h1>
	</header>

	<?php
		if (isset($_GET['action']) === false)
		{
			require_once 'home.php';
		}
		elseif ($_GET['action'] === "newTask")
		{
			require_once 'new_task.php';
		}
		elseif ($_GET['action'] === "editTask")
		{
			require_once 'edit_task.php';
		}
		elseif ($_GET['action'] === "showTask")
		{
			require_once 'show_task.php';
		}
	?>

</body>
</html>