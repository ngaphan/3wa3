var fNumber;
do {
    fNumber = prompt('Number');
} while (isNaN(fNumber));
document.write('Number : ' + fNumber + '<br />');

fNumber = parseFloat(fNumber);

document.write('Ceil : ' + Math.ceil(fNumber) + '<br />');
document.write('Floor : ' + Math.floor(fNumber) + '<br />');
document.write('Round : ' + Math.round(fNumber) + '<br />');