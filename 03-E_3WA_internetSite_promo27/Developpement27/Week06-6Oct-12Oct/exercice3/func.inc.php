<?php

/**
 * Get cities from $iIndexFrom position.
 *
 * @param integer $iIndexFrom index from where start.
 * @param integer $iSize size of cities to get.
 * @return array matched cities.
 */
function getCities($iIndexFrom, $iSize)
{
    $oDataBase = mysqli_connect('localhost', 'root', '', 'classroom');
    mysqli_set_charset($oDataBase, 'utf8');

    $sQuery = 'select * from city order by name asc limit ' . $iIndexFrom . ',' . $iSize;
    $oResult = mysqli_query($oDataBase, $sQuery);

    $aCities = array();
    do {
        $aCity = mysqli_fetch_assoc($oResult);
        if (null !== $aCity) {
            $aCities[] = $aCity;
        }
    } while (null !== $aCity);
    mysqli_free_result($oResult);

    mysqli_close($oDataBase);

    return $aCities;
}

/**
 * Display pagination.
 *
 * @param integer $iFrom index from where start.
 */
function displayPagination($iFrom)
{
    $iMaxPage = intval(floor(NB_CITIES / MAX_PER_PAGE) + 1);
    $iCurrentPage = intval(floor($iFrom / MAX_PER_PAGE) + 1);
    $iPreviousPage = $iCurrentPage - 1;
    $iNextPage = $iCurrentPage + 1;
    ?>
    <ul class="pagination">
        <?php if (1 !== $iCurrentPage): ?>
            <li><a href="?page=0">1</a></li>
        <?php endif; ?>

        <?php if ($iPreviousPage > 1): ?>
            <li><a href="?page=<?= $iPreviousPage; ?>"><?= $iPreviousPage; ?></a></li>
        <?php endif; ?>
        <li class="active"><a href="?page=<?= $iCurrentPage; ?>"><?= $iCurrentPage; ?></a></li>
        <?php if ($iNextPage < $iMaxPage): ?>
            <li><a href="?page=<?= $iNextPage; ?>"><?= $iNextPage; ?></a></li>
        <?php endif; ?>

        <?php if ($iCurrentPage < $iMaxPage): ?>
            <li><a href="?page=<?= $iMaxPage; ?>"><?= $iMaxPage; ?></a></li>
        <?php endif; ?>
    </ul>
<?php
}