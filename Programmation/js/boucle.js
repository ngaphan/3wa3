//exercice : Dragon Slayer //trancher le Dragon


var dragons= 

	{
		aquaDragon:
			{
				lifeLevelMax:100,				
				strength:10,
				defence:5
			},

		volcanoDragon:
			{
				lifeLevelMax:100,				
				strength:10,
				defence:5
			},

		stormDragon:
			{
				lifeLevelMax:100,				
				strength:10,
				defence:5
			}
			
	};


var weapons= 

	{
		magicwand: 100,
		crossbow:60,
		sword:20			
	};




var character=
{
	name:"John Snow",

	lifeLevelMax:30,

	lifeLevel:"",

	aumor:15,
};




var dragonType=window.prompt("which type of dragon ? 1 foraquaDragon/ 2 for volcanoDragon/ 3 for stormDragon");

window.prompt("which type of weapon ?");
