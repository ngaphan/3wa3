<?php
include('functions.php');
?>
<html>
<head>
    <?php include('header.inc.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>

<div class="container">
    <?php if (!is_file(CSV_FILE)) { ?>
        <h2>File not found</h2>
        <?php exit; ?>
    <?php } ?>
    <h1>List all tasks</h1>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Priority</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (getTodoList(CSV_FILE) as $aList) : ?>
            <tr>
                <td><?= $aList[0]; ?></td>
                <td><?= $aList[1]; ?></td>
                <td><?= $aList[2]; ?></td>
                <td><?= $aList[3]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>