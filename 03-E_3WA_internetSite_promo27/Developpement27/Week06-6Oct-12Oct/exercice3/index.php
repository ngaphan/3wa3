<?php
define ('MAX_PER_PAGE', 50);
define ('NB_CITIES', 36568);

require 'func.inc.php';
$iFrom = 0;
if (array_key_exists('page', $_GET)) {
    $iPage = intval($_GET['page']);
    if ($iPage <= 1) {
        $iFrom = 0;
    } else {
        $iFrom = ($iPage - 1) * MAX_PER_PAGE;
    }
}
$aCities = getCities($iFrom, MAX_PER_PAGE);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Cities</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Cities</h1>

    <?php displayPagination($iFrom); ?>

    <ul class="list-group">
        <?php foreach ($aCities as $aCity): ?>
            <li class="list-group-item">
                <span class="badge"><?= $aCity['population']; ?></span>
                <?= $aCity['postal_code']; ?> - <?= $aCity['name']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php displayPagination($iFrom); ?>
</div>
</body>
</html>