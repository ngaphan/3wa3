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


var iNumber = getInteger(1, 10, "Choose a number");
document.write("Chosen number : " + iNumber);