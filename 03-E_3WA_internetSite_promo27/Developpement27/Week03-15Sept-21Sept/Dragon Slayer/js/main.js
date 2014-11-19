var dragonUserChoice = window.prompt("Quel dragon (0: aquaDragon, 1: volcanoDragon, 2: stormDragon");

var dragonUserChoiceTranslation = ["aquaDragon", "volcanoDragon", "stormDragon"];

dragon = dragons[dragonUserChoiceTranslation[dragonUserChoice]];
// SI dragonUserChoice = 1
// dragon = dragons["volcanoDragon"]
// <=> dragon = dragons.volcanoDragon

dragon.lifeLevel = dragon.lifeLevelMax;

var weaponUserChoice = window.prompt("Quel dragon (0: magicWand, 1: crossBow, 2: sword");

var weaponUserChoiceTranslation = ["magicWand", "crossBow", "sword"];
character.weapon = weapons[weaponUserChoiceTranslation[weaponUserChoice]];
character.lifeLevel = character.lifeLevelMax;

attack(Math.round(Math.random()));