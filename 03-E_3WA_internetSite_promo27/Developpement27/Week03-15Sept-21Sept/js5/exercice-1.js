// Récupération de l'élément <h1> ayant pour id "title"
var oH1Element = document.getElementById('title');
// Affichage du contenu de l'élément h1
alert(oH1Element.innerHTML);

// Récupération de tous les éléments <h2>
var aH2 = document.getElementsByTagName('h2');
for (var iPos = 0; iPos < aH2.length; iPos++) {
    alert(aH2[iPos].className);
}
