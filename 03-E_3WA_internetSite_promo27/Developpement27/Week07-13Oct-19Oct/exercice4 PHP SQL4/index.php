<?php
    define ('MAX_PER_PAGE', 50);
    define ('NB_CITIES', 36568);

    $aSortColumns = array(
        'name' => 'Name',
        'postal_code' => 'Postal Code',
        'surface' => 'Surface',
        'population' => 'Population'
    );

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

    // default order by
    $sOrderBy = 'name';
    $bOrderAsc = true;
    if (array_key_exists('sort', $_GET)) {
        if (array_key_exists($_GET['sort'], $aSortColumns)) {
            $sOrderBy = $_GET['sort'];
        }
        $bOrderAsc = filter_var($_GET['sortDirection'], FILTER_VALIDATE_BOOLEAN);
    }

    $aCities = getCities($iFrom, MAX_PER_PAGE, $sOrderBy, $bOrderAsc);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Cities</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Cities&nbsp;
        <small>sorted by <?= $aSortColumns[$sOrderBy]; ?>&nbsp;<?= $bOrderAsc ? 'ascendant' : 'descendant'; ?></small>
    </h1>

    <form method="get" class="form-inline" role="form">
        <div class="form-group">
            <label for="sort">Sort by :</label><select name="sort" id="sort" class="form-control">
                <?php foreach ($aSortColumns as $sSortValue => $sSortLabel): ?>
                    <option
                        value="<?= $sSortValue; ?>" <?= ($sSortValue === $sOrderBy) ? 'selected="selected"' : ''; ?>><?= $sSortLabel; ?></option>
                <?php endforeach; ?>
            </select></div>
        <div class="form-group">
            <label class="radio-inline">
                <input type="radio" name="sortDirection" value="true" <?= ($bOrderAsc) ? 'checked="checked"' : ''; ?>/>
                Ascendant
            </label>
            <label class="radio-inline">
                <input type="radio" name="sortDirection"
                       value="false" <?= (!$bOrderAsc) ? 'checked="checked"' : ''; ?>/> Descendant
            </label>
        </div>
        <input type="submit" name="submit" class="btn btn-primary"/>
    </form>

    <?php displayPagination($iFrom, $sOrderBy, $bOrderAsc); ?>

    <ul class="list-group">
        <?php foreach ($aCities as $aCity): ?>
            <?php $sPostalCode = $aCity['postal_code'];
            if (false !== strpos($sPostalCode, '-')) {
                $aTmp = explode('-', $sPostalCode);
                $sPostalCode = $aTmp[0];
                unset($aTmp);
            }
            ?>
            <li class="list-group-item">
                <span class="badge surface"><?= $aCity['surface']; ?></span>
                <span class="badge population"><?= $aCity['population']; ?></span>
                <?= $sPostalCode; ?> - <?= $aCity['name']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php displayPagination($iFrom, $sOrderBy, $bOrderAsc); ?>
</div>
</body>
</html>