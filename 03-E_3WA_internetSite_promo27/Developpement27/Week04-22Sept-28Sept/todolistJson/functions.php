<?php

define ('CSV_FILE', 'todo.csv');
define ('JSON_FILE', 'todo.json');

/**
 * Create JSON file from CSV data.
 *
 * @param $sJsonFile JSON file.
 * @param $sCsvFile CSV file.
 */
function createJsonFromCsv($sJsonFile, $sCsvFile)
{
    if (!is_file($sJsonFile)) {
        $aAllLines = getTodoListCsv($sCsvFile);
        $sJsonContent = json_encode($aAllLines);
        file_put_contents($sJsonFile, $sJsonContent);
    }
}


/**
 * Get todo list as array.
 *
 * @param $sFile file path.
 * @return array todo list as array.
 */
function getTodoListCsv($sFile)
{
    // ouvre le fichier en lecture seule : protection d'édition
    $rFile = fopen($sFile, 'r');
    $aList = array();
    if (false != $rFile) {
        $bContinue = true;
        do {
            $sLine = fgetcsv($rFile, 1000);
            if (false == $sLine) {
                $bContinue = false;
            } else {
                $aList[] = $sLine;
            }
        } while ($bContinue);
    }
    // ferme le fichier
    fclose($rFile);

    return $aList;
}

/**
 * Get todo list as array.
 *
 * @param $sFile file path.
 * @return array todo list as array.
 */
function getTodoList($sFile)
{
    // récupère tout le contenu du fichier JSON dans une chaine
    $sJsonContent = file_get_contents(JSON_FILE);
    // converti le JSON en tableau PHP
    $aList = json_decode($sJsonContent);

    return $aList;
}

/**
 * Add a line in the todo list file.
 *
 * @param $sFile file path.
 * @param $aNewLine new line to add.
 * @return bool true if success, false otherwise.
 */
function addTodoList($sFile, $aNewLine)
{
    // on vérifie que toutes les colonnes sont remplies
    foreach ($aNewLine as $sColumnValue) {
        // si une colonne n'est pas remplie, on sort de la fonction
        if ('' == $sColumnValue) {
            return false;
        }
    }

    // ouvre le fichier CSV en écriture à la fin du fichier
    $aAllLines = getTodoList($sFile);
    $aAllLines[] = array_values($aNewLine);

    // converti le tableau en format JSON
    $sJsonContent = json_encode($aAllLines);

    $bReturn = true;
    // écriture dans le fichier, renvoi false en cas d'échec
    if (false == file_put_contents($sFile, $sJsonContent)) {
        $bReturn = false;
    }

    return $bReturn;
}

/**
 * Remove a specific line in the todo list.
 *
 * @param $sFile file path.
 * @param $iLineToRemove line position to remove.
 * @return bool true if success, false otherwise.
 */
function removeTodoList($sFile, $iLineToRemove)
{
    // numéro de ligne inférieur à zéro
    if ($iLineToRemove < 0) {
        return false;
    }

    // récupération de la liste des tâches sous forme de tableau
    $aAllLines = getTodoList($sFile);

    // condition de sortie : la ligne n'existe pas
    if ($iLineToRemove > count($aAllLines)) {
        return false;
    }

    // supprime la case du tableau
    unset($aAllLines[$iLineToRemove]);

    // converti le tableau en format JSON
    $sJsonContent = json_encode($aAllLines);

    $bReturn = true;
    // écriture dans le fichier, renvoi false en cas d'échec
    if (false == file_put_contents($sFile, $sJsonContent)) {
        $bReturn = false;
    }

    return $bReturn;
}