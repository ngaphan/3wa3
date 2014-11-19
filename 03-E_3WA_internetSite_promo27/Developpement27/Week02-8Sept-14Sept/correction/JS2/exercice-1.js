// Déclaration d'une voiture
var oCar = {
    brand: 'Volvo',
    madeYear: 2010,
    purchaseDate: new Date('2012-04-12'),
    passengers: ['Tom', 'Alex', 'Paul']
};

// Affichage des valeurs
document.write('<h1>Brand : ' + oCar.brand + '.</h1>');
document.write('<h2>Purchase date : ' + oCar.purchaseDate + '.</h2>');
document.write('<h3>Made year : ' + oCar.madeYear + '.</h3>');
document.write("<p>Passengers : " + oCar.passengers + '.</p>');

