
/*OK1
var txt="hello";
var table;
table=new Object();
table.pieds=4;
table.couleur="blue";


document.write(table.pieds);
document.write(table.couleur);
document.write(txt.length);


*/

/*autre manirere declare Obj _ OK

var table={
	pieds:4,couleur:"blue"
};
document.write(table.pieds);
document.write(table.couleur +"<br><br>");
document.write(table.couleur +"<br><br>"+ table.pieds);

*/

/* EX3

var myObject=new Object();
myObject.propretyOne="one";
myObject.propretyTwo="two";

document.write(myObject.propretyTwo +"<br><br>"+ myObject.propretyTwo);

*/
/*ERxactement la meme qui celui après -> mieux/

var myObject={
	propretyOne:"one",
	propretyTwo="two"
};
*/

/* mani1
var Car ={
	color:"red",// string
	speed: 200,//int
	buying date: new Date("1979-10-01"), //1 objet s'appel Date
	option list:["ABS","AFU"] //list=Array
};

document.write(Car.color +"<br><br>"+ Car.speed +"<br><br>"+Car.buying date+"<br><br>"+Car.option list);
*/

/* Code supper OK

var Car ={
	color:"red",
	speed: 200,
	buyingDate: new Date("2014-10-01"), //new Date("2014-10-01"): est juste 1valeur de la propriété :buyingDate , mais un peu plus compliqué, mais il est juste 1 valeur, non pas objet, ni Array
	optionsList:["ABS","AFU"] 
};

document.write(Car.color + "<br><br>" + Car.speed + "<br><br>" +Car.buyingDate+ "<br><br>" +Car.optionsList+ "<br><br>");

console.log(Car);

*/


/* ok*/

var chair={
	feet:4,
	color:"blue",
	option:"flexible",
	buyingDate:new Date("2014-09-10")/*2014-09-10 est juste 1 paramètre d'affichage , il va afficher de forme: année-mois-jour comme je lui ai induiqué. EX: si j'écris: Mon Feb 2000 , il va afficher de forme: jour mois année , ect.)*/
};

var date= new Date();
var semaineJours = new Array();

semaineJours[0]="Dimanche";
semaineJours[1]="Lundi";
semaineJours[2]="Mardi";
semaineJours[3]="Mercredi";
semaineJours[4]="Jeudi";
semaineJours[5]="Vendredi";
semaineJours[6]="samedidi";



var moisAnnee = new Array();

moisAnnee[0] = "Janvier";
moisAnnee[1] = "Février";
moisAnnee[2] = "Mars";
moisAnnee[3] = "Avril";
moisAnnee[4] = "Mai";
moisAnnee[5] = "Juin";
moisAnnee[6] = "Juillet";
moisAnnee[7] = "Août";
moisAnnee[8] = "Septembre";
moisAnnee[9] = "Octobre";
moisAnnee[10] = "Novembre";
moisAnnee[11] = "Décembre";

var jour = semaineJours[date.getDay()];
var mois = moisAnnee[date.getMonth()];

document.write(chair.feet + "<br><br>" +chair.color+ "<br><br>" +chair.option+ "<br><br>" + chair.buyingDate.getFullYear()+ + "<br><br>" + chair.buyingDate.mois + "<br><br>" + chair.buyingDate.jour + "<br><br>" );


console.log(chair);



/* à déclarer et intancier l'obj après /

var car ={
	color:"blue",
	speed: 200,
	buyingDate: new Date("2014-10-01"), 
	optionsList:[
		"ABS",
		"AFU"
		] 
};

console.log(car);


var redCar=car;
redCar.color="red";
console.log(redCar);


var yellowCar=car;
redCar.color="yellow";
console.log(yellowCar);


*/




