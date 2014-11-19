<?php

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\AbstractAnimal;
    use troiswa\dev23\animal\Attackable;
    use troiswa\dev23\animal\Fish;
    use troiswa\dev23\animal\Swimmable;

    class Shark extends AbstractAnimal implements Swimmable, Attackable
    {
        /**
         * @var int strength
         */
        private $iStrength = 60;

        public function swim()
        {
            echo 'Shark swim!';
        }

        public function attack(AbstractAnimal $oAnimal)
        {
            $oAnimal->reduceHP($this->iStrength);
        }
    }