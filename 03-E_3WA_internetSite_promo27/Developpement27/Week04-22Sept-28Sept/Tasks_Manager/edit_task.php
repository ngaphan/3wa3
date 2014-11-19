<form method="post" action="">

	<input name="taskTitle" type="text" placeholder="Titre" value="<?php echo $taskArray[0]; ?>"><br>

	<input name="taskDate" type="date" value="<?php echo $taskArray[2]; ?>"><br>

	<textarea name="taskDescription" placeholder="Description"><?php echo $taskArray[1]; ?></textarea><br>
	
	<input name="action" value="updateTask" type="hidden">

	<input type="submit" value="METTRE A JOUR" class="button_classic">

</form>