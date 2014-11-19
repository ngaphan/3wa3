
/*
var age;
age="20";
age="hello";
const myConstant=50;/* faut donner tout de suite une valeur ici car c'est inchagable meme si on donne 1 autre 
myConstant=33;     /*valeur après, ça prendra pas en compte .Si on donne pas 1 valeur au debut, 
document.write( MY_CONSTANT );/*ça prend la valeur par default , c'est "undifined" 

*/


/* Code _ok1

var a= 10;
var b= 20;

var result1=a+b;
var result2=a-b;
var result3=a*b;
var result4=a/b;


document.write(" Calcul 1 = " + result1+ "<br><br><br>");
document.write(" Calcul 2 = " + result2 + "<br><br><br>");
document.write(" Calcul 3 = " + result3 + "<br><br><br>");
document.write(" Calcul 4 = " + result4 + "<br><br><br>");


*/


/* Code_ok2

//var TVA ;
const tvaTaux=19.9;
var TTC;
var answer_HT=window.prompt(" Prix HT ?");
//var answer_TVA=window.prompt(" TVA ?");
var TTC;
TTC=(answer_HT*tvaTaux)/100;
document.write("<br>" + "  Prix HT = " + answer_HT + " € " + "<br><br>" + "  TVA :" +  tvaTaux + "  %  " 
	+ "<br><br> " + " Prix TTC  = " + TTC + " € "); 

x=Math.round(TTC);
document.write("<br><br>"+ x);

*/



/* Code_ok3

var HT = window.prompt(" Prix HT ?");
var TVA = window.prompt(" TVA ?");
var TTC=(HT*TVA)/100;
document.write("<br>" + "  Prix HT = " + HT + " € " + "<br><br>" + "  TVA : " +  TVA  + "  %  " 
	+ "<br><br> " + " Prix TTC  = " + TTC + " € "); 

*/


/* Code_ok5

var TVA ;
var TTC;
var answer_HT=window.prompt(" Prix HT ?");
var answer_TVA=window.prompt(" TVA ?");
var TTC;
TTC=(answer_HT*answer_TVA)/100;
document.write("<br>" + "  Prix HT = " + answer_HT + " € " + "<br><br>" + "  TVA :" +  answer_TVA + "  %  " 
	+ "<br><br> " + " Prix TTC  = " + TTC + " € "); 

*/

/* Code_ok6

const tva=19.6;
var prixHT=33.33;
var prixTTC=prixHT*(100+tva)/100; 			// = 39.86268 
document.write(prixTTC);
prixTTC=prixTTC*100;						// = 3986.268 , , pr pousser le décimal vers la droite
prixTTC=Math.round(prixTTC);				// = 3986 
prixTTC=prixTTC/100;						// = 39.86 
document.write("<br><br>" + prixTTC);

*/

/* Code_ok7

var date= new Date();
var Mois= date.getMonth()+1;//car il renvoit le mois de son indice ,ex: indice 0 = Janvier , 5= juin
//console.log(semaineJours);//log = journal , console= écran qui gère le fonctionnement de la machine(wikipédia)
//document.write(semaineJours);//afficher tout le tableau séparé par ','
//document.write("<br><br>" + semaineJours[2]);//afficher 1 seule ligne


document.write("<br><br>" + "Nous sommes le "   + " " + date.getDate() + " / " + Mois + 
" / " + date.getUTCFullYear() );//afficher la date en français

*/

/* Code_ok8


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
var jour = semaineJours[date.getDate()];
var mois = moisAnnee[date.getMonth()];

document.write( "Nous sommes le "   + " " + jour +  " " + date.getDate() + " "+ mois + " " +
 date.getUTCFullYear() );//afficher la date en français

*/

/* Code_ok9

var date= new Date();

var semaineJours = new Array();
var semaineJoursNo = date.getDay()-1;

semaineJours[0]="Lundi";
semaineJours[1]="Mardi";
semaineJours[2]="Mercredi";
semaineJours[3]="Jeudi";
semaineJours[4]="Vendredi";
semaineJours[5]="samedidi";
semaineJours[6]="Dimanche";


document.write("Nous sommes le "   + " " + semaineJours[semaineJoursNo]);
*/

//* Code_ok10
var date= new Date();

var semaineJours = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","samedidi","Dimanche"];
var semaineJoursNo = date.getDay()-1;

var anneeMois = ["Janvier","Février","Mars","Avril","Mai","",""];
var anneeMoisNo = date.getMonth()-1;

var mois = date.getMonth() +1 ;
//var heure = date.getHours();

document.write("Nous sommes le "   + " " + "<u>" + semaineJours[semaineJoursNo] +  " " + date.getDate() 
	+ " "+ mois + " " + date.getUTCFullYear() + "</u>" +
" <em> à " + date.getHours() + " h : " + date.getMinutes() + " min : " + date.getSeconds() +" s </em>" );
