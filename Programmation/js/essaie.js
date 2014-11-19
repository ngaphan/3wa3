

console.log(document.getElementById("title").innerHTML);
var salut= document.getElementById("title").innerHTML+" Aude ";
//récupère Bonjour et ajouter "Aude"
console.log(salut);




document.getElementById("title").innerHTML="Bonjour Aude";//crire

console.log(document.getElementById("title").innerHTML);//lecture



var h1Tags=document.getElementsByTagName("h1");

console.log(h1Tags);



h1Tags[3].innerHTML="Aurevoir";








/*

function yourName(name)
{
	for(var i=0;i<=3;i++)
	{
		
		var name=window.prompt("name?");
		
		
	}	
	
	i=i++;
	return name;
}


var salut=document.getElementById("title").innerHTML+ " " +yourName();

document.write
console.log(salut);

*/