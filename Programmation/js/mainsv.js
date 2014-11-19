
var userDragonChoice = window.prompt(" Type of dragon ? 0.aquaDragon 1.volcanoDragon 2.stormDragon");
var userDragonChoiceTranslation = ["aquaDragon","volcanoDragon","stormDragon"];

dragon=dragons[userDragonChoiceTranslation[userDragonChoice]];

dragon.lifeLevel=dragon.lifeLevelMax;
//créer 1 nouvelle propriété lifeLevel et l'attacher à dragon av la valeur =lifeLevelMax qui est crée ds dragon

console.log(dragon);


var userWeaponChoice =window.prompt("Type of weapon ? 0.magicWand 1.crossBow 2.sword");
var userWeaponChoiceTranslation = ["magicWand","crossBow","sword"];

arme=weapons[userWeaponChoiceTranslation[userWeaponChoice]];

character.arme= userWeaponChoice;

//créer 1 nouvelle propriété weapon et attacher weapon à character

console.log(weapon);// affich ce que l'utilisateur a tapé

console.log(character);

/* affich le personnage(charactère) av tous les propriétés après avoir ajouté 'arme'*/

/*Choisir qui va commencerà attaquer

var nbrAttack = weapons.attaque;
var attack=(Math.round(Math.random()));

console.log(attack);


if(attack==0)
{
	console.log("character attack !");
	nbrAttack= nbrAttack -1;
	console.log(nbrAttack);
}

else{
	console.log("dragon attack !");
	nbrAttack= nbrAttack -1;
	console.log(nbrAttack);
}dragonLifeLevel


*/

function attack (attackSide)
{
	if(attackSide==0)  //charater attaque
	{
		var hitPoints=hitPointsCalculate(character.weapon.attack);
		dragonLifeLevel=dragonLifeLevel-(hitPoints-dragon.defence);
		document.write("Perso attack:" + hitPoints+"<br>");
		document.write("Dragon vie:" + hitPoints+"<br>");
	}
}





function hitPointsCalculate(hitPointsOrigin)
{
	var hitPointsNew=hitPointsOrigin-((Math.random()/2)*hitPointsOrigin);
	return Math.round(hitPointsNew)
}