<?php
    require 'func.inc.php';
    $iSize = 10;
    if (array_key_exists('size', $_GET) && is_numeric($_GET['size'])) {
        $iSize = intval($_GET['size']);
    }
    $aStudents = getYoungestStudents($iSize);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Youngest students</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Youngest students</h1>

    <p>Choose size of students to display :</p>
    <ul class="list-inline">
        <?php for ($iSize = 10; $iSize <= 100; $iSize += 10): ?>
            <li><a href="?size=<?= $iSize; ?>"><?= $iSize; ?></a></li>
        <?php endfor; ?>
    </ul>

    <?php if (count($aStudents) > 0): ?>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <?php foreach (array_keys($aStudents[0]) as $sColumn): ?>
                    <th><?= $sColumn; ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($aStudents as $aStudent): ?>
                <tr>
                    <?php foreach ($aStudent as $sValue): ?>
                        <td><?= $sValue; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</div>
</body>
</html>