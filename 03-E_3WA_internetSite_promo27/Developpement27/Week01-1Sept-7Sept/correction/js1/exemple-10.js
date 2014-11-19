// Déclaration de deux variables.
var iNumber1;
var iNumber2;
var iSum;


// Affectation de la saisie de l'utilisateur aux variables.
iNumber1 = window.prompt('Veuillez saisir un premier nombre :');
iNumber2 = window.prompt('Veuillez saisir un deuxième nombre :');

/*
 * window.prompt() a renvoyé une chaîne de caractère même si on a saisi un nombre.
 * On doit donc convertir nos variables en nombres avant de pouvoir les additionner.
 */
iNumber1 = parseInt(iNumber1);
iNumber2 = parseInt(iNumber2);


// Addition des deux variables.
iSum = iNumber1 + iNumber2;

// Affichage du résultat directement dans la page HTML.
document.write('Sum : '+iSum);