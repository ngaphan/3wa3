<?php

define ('CSV_FILE', 'todo.csv');


/**
 * Get todo list as array.
 *
 * @param $sFile file path.
 * @return array todo list as array.
 */
function getTodoList($sFile)
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
    $rFile = fopen($sFile, 'a');
    if (false != $rFile) {
        // écrit toutes les valeurs à la dernière ligne
        fputcsv($rFile, $aNewLine);
        $bReturn = true;
    } else {
        $bReturn = false;
    }
    // ferme le fichier
    fclose($rFile);

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

    // ouvre le fichier CSV en écriture et vide son contenu
    $rFile = fopen($sFile, 'w');
    // si le fichier est bien ouvert
    if (false != $rFile) {
        // pour chaque ligne
        foreach ($aAllLines as $iLineNumber => $aLineValues) {
            // on enregistre seulement si ce n'est pas la ligne à supprimer
            if ($iLineToRemove != $iLineNumber) {
                fputcsv($rFile, $aLineValues);
            }
        }
        $bReturn = true;
    } else {
        // le fichier n'a pas pu être ouvert
        $bReturn = false;
    }
    // ferme le fichier
    fclose($rFile);

    return $bReturn;
}