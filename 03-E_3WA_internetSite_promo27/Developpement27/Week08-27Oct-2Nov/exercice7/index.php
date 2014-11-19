<?php

    use troiswa\dev23\animal\Animal;
    use troiswa\dev23\animal\bird\Eagle;
    use troiswa\dev23\animal\Bird;
    use troiswa\dev23\animal\Fish;
    use troiswa\dev23\animal\fish\Dolphin;
    use troiswa\dev23\animal\fish\Shark;
    use troiswa\dev23\animal\fish\Whales;

    require 'src/troiswa/dev23/animal/Animal.class.php';
    require 'src/troiswa/dev23/animal/Bird.class.php';
    require 'src/troiswa/dev23/animal/Fish.class.php';
    require 'src/troiswa/dev23/animal/bird/Eagle.class.php';
    require 'src/troiswa/dev23/animal/fish/Shark.class.php';
    require 'src/troiswa/dev23/animal/fish/Dolphin.class.php';
    require 'src/troiswa/dev23/animal/fish/Whales.class.php';

    // animals
    echo '<h2>Created animals</h2>';
    $oAnimal = new Animal('ani');
    $oBird = new Bird('bibi');
    $oFish = new Fish('fifi');
    $oEagle = new Eagle('eag');
    $oShark = new Shark('shasha');
    $oDolphin = new Dolphin('dodo');
    $oWhales = new Whales('whawha');

    echo $oAnimal . '<br />';
    echo $oBird . '<br />';
    echo $oFish . '<br />';
    echo $oEagle . '<br />';
    echo $oShark . '<br />';
    echo $oDolphin . '<br />';
    echo $oWhales . '<br />';

    // random animals
    echo '<h2>Random :</h2>';
    $aAnimals = array();
    for ($iPos = 1; $iPos <= 10; $iPos++) {
        $aAnimals[] = Animal::randomCreate('name ' . $iPos);
    }

    foreach ($aAnimals as $oAnimal) {
        /* @var $oAnimal Animal */
        echo $oAnimal . '<br />';
    }