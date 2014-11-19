//exercice : Dragon Slayer //trancher le Dragon


var dragons= 

	{
		aquaDragon:
			{	
				type:1,
				lifeLevelMax:100,				
				strength:10,
				defence:5
			},

		volcanoDragon:
			{	
				type:2,
				lifeLevelMax:100,				
				strength:10,
				defence:5
			},

		stormDragon:
			{	
				type:3,
				lifeLevelMax:100,				
				strength:10,
				defence:5
			}
			
	};

var weapons= 

	{
		magicWand:
		{
			attaque:5,
			color:"red"

		} ,

		crossBow:
		{
			attaque:5,
			color:"blue"

		},

		sword:
		{
			attaque:5,
			color:"yellow"
		}

					
	};


var character=
{
	name:"John Snow",

	lifeLevelMax:300,

	armor:15
};

/* créer d'abord la variable dragon en tant qu'1 Obj pr qu'on sache quelle variable qu'on a crée*/

var dragon=new Object();

var weapon=new Object();






