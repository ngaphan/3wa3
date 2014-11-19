<?php

/**
 * Print an array. Used for debug.
 *
 * @param array $aArray array to display.
 */
function arrayPrint(array $aArray)
{
    echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}

/**
 * Print text to screen.
 *
 * @param string $sTextToPrint
 *            text to print.
 */
function textPrint($sTextToPrint)
{
    echo '<code>';
    echo $sTextToPrint;
    echo '</code>';
}

/**
 * Display a HTML title.
 *
 * @param integer $iLevel
 *            title level.
 * @param string $sContent
 *            content to display.
 */
function displayTitle($iLevel, $sContent)
{
    // if it's not a numeric, then we don't display any title
    if (!is_numeric($iLevel)) {
        return;
    }
    // convert to integer
    $iLevel = intval($iLevel);
    // head title should be between 1 and 5
    if ($iLevel < 1 || $iLevel > 5) {
        return;
    }
    echo '<h' . $iLevel . '>';
    echo $sContent;
    echo '</h' . $iLevel . '>';
}

/**
 * New implode function.
 *
 * @param string $sGlue glue / text to repeat between values
 * @param array $aPieces pieces / values
 * @return string text of all pieces separated by glue.
 */
function implode2($sGlue, array $aPieces)
{
    $sText = '';
    foreach ($aPieces as $sPiece) {
        // skip glue for first piece
        if ('' != $sText) {
            $sText .= $sGlue;
        }
        $sText .= $sPiece;
    }

    return $sText;
}

/**
 * New implode function with start text and end text.
 *
 * @param string $sGlue glue / text to repeat between values
 * @param array $aPieces pieces / values
 * @param string $sStartText start text
 * @param string $sEndText end text
 * @return string text of all pieces separated by glue.
 */
function implode3($sGlue, array $aPieces, $sStartText = '', $sEndText = '')
{
    $sText = '';
    foreach ($aPieces as $sPiece) {
        // skip glue for first piece
        if ('' != $sText) {
            $sText .= $sGlue;
        }
        $sText .= $sPiece;
    }

    return $sStartText . $sText . $sEndText;
}


