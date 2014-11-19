<?php
include('functions.php');

$bTaskAdded = null;

if (array_key_exists('submit', $_POST)) {
    $bTaskAdded = addTodoList(CSV_FILE, $_POST);
}
?>

<html>
<head>
    <?php include('header.inc.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>
<div class="container">
    <h1>Add a task</h1>

    <?php if ($bTaskAdded) { ?>
        <p class="message">New task added!</p>
    <?php } elseif (false === $bTaskAdded) { ?>
        <p class="message">Error adding task.</p>
    <?php } ?>

    <form action="" method="post">
        <div><label for="title">Title</label><input type="text" name="title" id="title" value="title"/></div>
        <div><label for="description">Description</label><textarea name="description" id="description" rows="4">description</textarea>
        </div>
        <div><label for="date">Date</label><input type="date" name="date" id="date"/></div>
        <div><label for="priority">Priority</label><select name="priority" id="priority">
                <option selected="selected">Critical</option>
                <option>High</option>
                <option>Medium</option>
                <option>Trivial</option>
            </select></div>
        <div>
            <input type="submit" name="submit" value="submit"/>
        </div>
    </form>
</div>
</body>
</html>