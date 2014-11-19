// Déclaration de deux variables.
var iSunday;
var aArray;


// Création du tableau.
//aWeek = new Array();

// Affectation de valeurs au tableau.
//aWeek[0] = 'Lundi';
//aWeek[1] = 'Mardi';
//aWeek[2] = 'Mercredi';
//aWeek[3] = 'Jeudi';
//aWeek[4] = 'Vendredi';
//aWeek[5] = 'Samedi';
//aWeek[6] = 'Dimanche';
aArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday','Sunday'];

// Affectation d'une valeur à la variable.
iSunday = 6;


/*
 * Affichage du contenu d'une partie du tableau directement dans la page HTML.
 *
 * La variable iSunday est utilisée comme un indice dans le tableau aWeek.
 */
document.write('Le premier jour de la semaine est le ' + aArray[0] + ' ');
document.write('et le dernier jour de la semaine est le ' + aArray[iSunday] + '.');
document.write('il y a ' + aArray.length+ ' jours.<br />');

var dToday = new Date();

document.write('It is '+dToday.getDate()+'/'+dToday.getMonth()+'/'+dToday.getUTCFullYear()+' '+dToday.getHours()+':'+dToday.getMinutes()+':'+dToday.getSeconds());

//
//setInterval(function(){
//    var dToday = new Date();
//    document.write('It is '+dToday.getDate()+'/'+dToday.getMonth()+'/'+dToday.getUTCFullYear()+' '+dToday.getHours()+':'+dToday.getMinutes()+':'+dToday.getSeconds()+'<br />');
//}, 1000);