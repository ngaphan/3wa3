<?php

    use troiswa\dev23\animal\AbstractAnimal;
    use troiswa\dev23\animal\bird\Eagle;
    use troiswa\dev23\animal\Bird;
    use troiswa\dev23\animal\Fish;
    use troiswa\dev23\animal\fish\Dolphin;
    use troiswa\dev23\animal\fish\FlyFish;
    use troiswa\dev23\animal\fish\Shark;
    use troiswa\dev23\animal\fish\Whale;

    function autoloadItemsClass($sClassName)
    {
        $sFilePath = 'src/' . $sClassName . '.class.php';
        if (is_file($sFilePath)) {
            require_once $sFilePath;
        }
    }

    spl_autoload_register('autoloadItemsClass');

    // animals
    echo '<h2>Created animals</h2>';

    $aAnimals = array();
    $aAnimals[] = new Eagle('eag');
    $aAnimals[] = new Shark('shasha');
    $aAnimals[] = new Dolphin('dodo');
    $aAnimals[] = new Whale('whawha');
    $aAnimals[] = new FlyFish('flyfly');

    foreach ($aAnimals as $oAnimal) {
        /* @var $oAnimal AbstractAnimal */
        echo '<h2>' . get_class($oAnimal) . '</h2>';
        if (method_exists($oAnimal, 'fly')) {
            $oAnimal->fly();
        }
        if (method_exists($oAnimal, 'swim')) {
            $oAnimal->swim();
        }
        echo '<p>Before growing up, speed : ' . $oAnimal->getSpeed() . ' | weight : ' . $oAnimal->getWeight() . '</p>';
        $oAnimal->growUp();
        echo '<p>After growing up, speed : ' . $oAnimal->getSpeed() . ' | weight : ' . $oAnimal->getWeight() . '</p>';
    }


    // eagle attack dolphin
    $aAnimals[0]->attack($aAnimals[2]);
    // display dolphin HP
    var_dump('Dolphin HP : ' . $aAnimals[2]->getHP());

    // shark attack whale
    $aAnimals[1]->attack($aAnimals[3]);
    // display whale HP
    var_dump('Whale HP : ' . $aAnimals[3]->getHP());
    $aAnimals[1]->attack($aAnimals[3]);
    var_dump('Whale HP : ' . $aAnimals[3]->getHP());
