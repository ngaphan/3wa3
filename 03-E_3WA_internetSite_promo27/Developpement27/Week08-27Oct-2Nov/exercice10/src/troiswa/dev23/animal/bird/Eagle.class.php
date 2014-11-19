<?php

    namespace troiswa\dev23\animal\bird;


    use troiswa\dev23\animal\AbstractAnimal;
    use troiswa\dev23\animal\Attackable;
    use troiswa\dev23\animal\Bird;
    use troiswa\dev23\animal\Flyable;

    class Eagle extends AbstractAnimal implements Flyable, Attackable
    {

        /**
         * @var int strength
         */
        private $iStrength = 20;

        public function fly()
        {
            echo 'I fly very fast!';
        }

        public function attack(AbstractAnimal $oAnimal)
        {
            $oAnimal->reduceHP($this->iStrength);
        }


    }