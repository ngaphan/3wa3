/*************
 * 1ere étape
 *************
 * Saisie d'un nombre et affichage de sa table de multiplication
 ************/
var iNumber = parseInt(prompt('Number'));
var aNumberTable = new Array();

// parcours
for (var iPos = 0; iPos <= 10; iPos++) {
    aNumberTable[iPos] = iPos * iNumber;
}

// affichage
document.write('<table border="1">');
for (var iPos = 0; iPos < aNumberTable.length; iPos++) {
    document.write('<tr><td>' + iPos + '</td><td>' + aNumberTable[iPos] + '</td></tr>');
}
document.write('</table>');



/*************
 * 2eme étape
 *************
 * Affichage de la table complète de multiplications
 ************/

var aMultiplicationTable = new Array();
for (var iPosColumn = 0; iPosColumn <= 10; iPosColumn++) {
    aMultiplicationTable[iPosColumn] = new Array();
    for (var iPosLine = 0; iPosLine < aNumberTable.length; iPosLine++) {
        aMultiplicationTable[iPosColumn][iPosLine] = iPosColumn * iPosLine;
    }
}

// affichage
document.write('<h2>full table</h2>');
document.write('<table>');

document.write('<thead><tr><th>&nbsp;</th>');
for (var iPos = 0; iPos <= 10; iPos++) {
    document.write('<th>' + iPos + '</th>');
}
document.write('</tr></thead>');

for (var iPosColumn = 0; iPosColumn <= 10; iPosColumn++) {
    document.write('<tr>');
    document.write('<td>' + iPosColumn + '</td>');
    for (var iPosLine = 0; iPosLine <= 10; iPosLine++) {
        document.write('<td>' + aMultiplicationTable[iPosColumn][iPosLine] + '</td>');
    }
    document.write('</tr>');
}
document.write('</table>');