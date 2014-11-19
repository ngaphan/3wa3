// Déclaration d'une constante.
const VAT = 20.0;

// Déclaration de trois variables.
var fHTAmount;
var fTTCAmount;
var fTVAAmount;


// Affectation d'une valeur à une variable.
fHTAmount = 100;

// Incrémentation d'une variable.
fHTAmount++;                         // Identique à fHTAmount = fHTAmount + 1;

/* A partir de cette ligne fHTAmount vaut 101. */

// Décrémentation d'une variable.
fHTAmount--;                         // Identique à fHTAmount = fHTAmount - 1;

/* A partir de cette ligne fHTAmount vaut 100 de nouveau. */


// Opérations sur des variables et constantes.
fTVAAmount = fHTAmount * VAT / 100;
fTTCAmount = fHTAmount + fTVAAmount;

// Affichage du résultat directement dans la page HTML.
document.write(fTTCAmount);