// Déclaration d'une voiture
var iPrice = 10;

var iAge = prompt('Age');

if (iAge < 18) {
    iPrice = 0;
} else if ((iAge >= 18) && (iAge <= 25)) {
    iPrice /= 2;
} else {
}
document.write('Price : ' + iPrice);
