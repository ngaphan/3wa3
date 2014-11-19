function euroConverter(fFrancs) {
    return fFrancs / 6.55957;
}

document.write('<table>');
document.write('<thead><tr><th>Francs</th><th>Euros</th></tr></thead>');
for (var fNumber = 1; fNumber <= 10; fNumber += .5) {
    document.write('<tr><td>' + fNumber + '</td><td>' + euroConverter(fNumber) + '</td></tr>');
}
document.write('</table>');