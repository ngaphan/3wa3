var iSearchNumber = 0;
// demande de saisir un premier nombre compris entre 1 et 100
do {
    iSearchNumber = parseInt(prompt('Search number : [1-100]'));
    // recommence si le nombre n'est pas dans l'intervalle
} while (iNumber < 1 || iNumber > 100);

var iNumber = 0;
var iCounter = 0;

// demande un nombre dans l'intervalle
do {
    iNumber = parseInt(prompt('Search the number : [1-100]'));
    // on redemande la saisie si le nombre n'est pas dans l'intervalle
    while (iNumber < 1 || iNumber > 100) {
        iNumber = parseInt(prompt('Number must be between 1 and 100'));
    }
    iCounter++;
    // on continue tant que l'on n'a pas trouvé le bon nombre
} while (iSearchNumber != iNumber);

// écriture du résultat et nombre de coups
document.write('Game finished in ' + iCounter + ' tries, number was ' + iSearchNumber);