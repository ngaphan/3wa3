// constantes : minimum et maximum
const I_MIN = 0;
const I_MAX = 1000;
// maximum de tentatives
const MAX_ROUNDS = 5;


// Partie complète
var bKeepPlaying = true;
var iMin;
var iMax;
var iRandomNumber;
var iUserNumber = null;
var iTries = 0;
var iGames = 0;
var iGameWins = 0;
var iGameLoses = 0;
var iBestTries = MAX_ROUNDS;

while (bKeepPlaying) {
    // Simple jeu
    // choix de l'intervalle : minimum
    iMin = getInteger(I_MIN, I_MAX, "Chose a number Min");
    // choix de l'intervalle : maximum
    iMax = getInteger(iMin, I_MAX, "Chose a number Max");
    // récupération d'un nombre aléatoire dans l'intervalle
    iRandomNumber = randomInteger(iMin, iMax);
    iUserNumber = null;
    iTries = 0;
    do {
        if (null != iUserNumber) {
            if (iUserNumber < iRandomNumber) {
                alert('More !');
            } else {
                alert('Less !');
            }
        }
        iUserNumber = getInteger(iMin, iMax, 'Chose a number');
        iTries++;
    } while ((iUserNumber != iRandomNumber) && (iTries < MAX_ROUNDS));
    iGames++;

    // fin du jeu
    var sEndGame = '<p>Game #' + iGames + ' finished! ';
    /* on gagne lorsque les deux conditions sont remplies :
     1. le nombre de l'utilisateur est le même que l'aléatoire
     2. le nombre de coup n'est pas supérieur au maximum autorisé
     */
    if (iUserNumber == iRandomNumber && iTries <= MAX_ROUNDS) {
        sEndGame += 'You win !!! Congrats!';
        iGameWins++;
        if (iTries < iBestTries) {
            iBestTries = iTries;
        }
    } else {
        // dans le cas contraire => défaite
        sEndGame += 'You loose...';
        iGameLoses++;
    }
    sEndGame += 'Number to find was ' + iRandomNumber + "<br />" + iTries + ' shots' + "</p>";
    document.write(sEndGame);

    bKeepPlaying = confirm('Keep playing ?');
}

document.write('<p>All done, you played ' + iGames + ' times</p>');
document.write('<p>You won ' + iGameWins + ' games (' + (iGameWins / iGames * 100) + '%), but lose ' + iGameLoses + ' (' + (iGameLoses / iGames * 100) + '%) games</p>');
document.write('<p>Your best score is ' + iBestTries + ' tries</p>');
