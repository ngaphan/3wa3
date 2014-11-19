<?php

/**
 * Display message to screen.
 *
 * @param string $sTextToPrint
 *            text to print.
 * @param bool $bSuccess success or error.
 */
function displayMessage($sTextToPrint, $bSuccess)
{
    if ($bSuccess):
        ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success!</strong> <?= $sTextToPrint; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Warning!</strong> <?= $sTextToPrint; ?>
        </div>
    <?php endif;
}

/**
 * Add a new student to the database.
 *
 * @param string $sName student name.
 * @param date $dBirthday birthday.
 * @param integer $iCityId city id.
 * @return bool true if success, false otherwise.
 */
function addStudent($sName, $dBirthday, $iCityId)
{
// name cannot be empty, and should be at least 3 characters
    if ('' === $sName || strlen($sName) < 3) {
        displayMessage('name cannot be empty, and should be at least 3 characters!', false);
        return false;
    }

// database connection
    $oDataBase = mysqli_connect('localhost', 'root', '', 'classroom');
    if (false === $oDataBase) {
// database error
        displayMessage('database error', false);
        return false;
    }

// query creation
    $sQuery = "insert into student(name, birthday, city_id) values ('$sName', '$dBirthday', $iCityId)";
// execute query
    $oResult = mysqli_query($oDataBase, $sQuery);

// something went wrong in the query
    if (false === $oResult) {
        displayMessage('something went wrong in the query : ' . $sQuery, false);
        return false;
    }

// otherwise : success
    return true;
}