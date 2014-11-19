// Création du tableau des jours.
var aWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
// Création du tableau des mois
var aMonths = ['january',
    'february',
    'march',
    'april',
    'may',
    'june',
    'july',
    'august',
    'september',
    'october',
    'november',
    'december'];


var dToday = new Date();

document.write('It is ' + aWeek[dToday.getDay() - 1] + ' ' + dToday.getDate() + 'th ' + aMonths[dToday.getMonth()] + ' ' + dToday.getUTCFullYear() + ' ' + dToday.getHours() + ':' + dToday.getMinutes() + ':' + dToday.getSeconds());

