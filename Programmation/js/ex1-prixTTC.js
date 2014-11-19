var TTC;
TTC= window.prompt("Prix TTC?");
var HT ;
HT= (TTC/1.196);
var TVA;
TVA=(HT*19.6);

document.write(" Prix HT = " + HT);
document.write(" TVA = " + TVA);