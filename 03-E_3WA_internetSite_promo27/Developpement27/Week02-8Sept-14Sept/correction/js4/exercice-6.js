// constantes : minimum et maximum
const I_MIN = 0;
const I_MAX = 1000;
// maximum de tentatives
const MAX_ROUNDS = 5;

// choix de l'intervalle : minimum
var iMin = getInteger(I_MIN, I_MAX, "Chose a number Min");
// choix de l'intervalle : maximum
var iMax = getInteger(iMin, I_MAX, "Chose a number Max");
// récupération d'un nombre aléatoire dans l'intervalle
var iRandomNumber = randomInteger(iMin, iMax);


// Jeu :
var iUserNumber;
var iCount = 0;
do {
    iUserNumber = getInteger(iMin, iMax, 'Chose a number');
    iCount++;
} while ((iUserNumber != iRandomNumber) && (iCount < MAX_ROUNDS));


// fin du jeu
var sEndGame = 'Game finished! ';
/* on gagne lorsque les deux conditions sont remplies :
 1. le nombre de l'utilisateur est le même que l'aléatoire
 2. le nombre de coup n'est pas supérieur au maximum autorisé
 */
if (iUserNumber == iRandomNumber && iCount <= MAX_ROUNDS) {
    sEndGame += 'You win !!! Congrats!';
} else {
    // dans le cas contraire => défaite
    sEndGame += 'You loose...';
}
sEndGame += 'Number to find was ' + iRandomNumber + "<br />" + iCount + ' shots';

document.write(sEndGame);