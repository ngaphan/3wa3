// Déclaration de deux variables.
var iAge;
var sFirstname;


// Affectation d'une valeur à une variable.
sFirstname = 'Tom';

/*
 * Concaténation d'un nombre avec une chaîne de caractères.
 * Le + ici est compris comme une concaténation car la chaîne ' ans' n'est pas un nombre.
 *
 * Affectation du résultat à une variable.
 */
iAge = 30 + ' ans'


/*
 * Affichage de deux paragraphes directement dans la page HTML.
 *
 * Les chaînes de caractères sont concaténées avec le +
 */
document.write("<p>Bonjour, je m'appelle " + sFirstname + '</p>');
document.write("<p>J'ai " + iAge + '</p>');