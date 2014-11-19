/**
 * Get an integer between iMin & iMax.
 * @param iMin min
 * @param iMax max
 * @param sMessage message to display
 * @return valid number.
 */
function getInteger(iMin, iMax, sMessage) {
    var iNumber;

    /*
     * La boucle s'exécute tant que l'entier n'est pas un nombre (fonction isNaN()) et
     * n'est pas compris entre les arguments min et max.
     */
    do {
        // On demande à l'utilisateur de saisir un nombre entier.
        iNumber = parseInt(window.prompt(sMessage + ' [' + iMin + '-' + iMax + ']'));
    }
    while (isNaN(iNumber) || iNumber < iMin || iNumber > iMax);

    return iNumber;
}

/**
 * Calculate a random integer between iMin and iMax.
 *
 * @param iMin minimum value
 * @param iMax maximum value
 * @return integer random integer between iMin and iMax.
 */
function randomInteger(iMin, iMax) {
    return Math.round(Math.random() * (iMax - iMin)) + iMin;
}


