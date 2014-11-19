/*******************************************************************************************/
/********************************** FONCTIONS UTILITAIRES **********************************/
/*******************************************************************************************/

/**
 * Calculate a random integer between iMin and iMax.
 *
 * @param iMin minimum value
 * @param iMax maximum value
 * @return integer random integer between iMin and iMax.
 */
function getRandomInteger(iMin, iMax) {
    return Math.round(Math.random() * (iMax - iMin)) + iMin;
}

