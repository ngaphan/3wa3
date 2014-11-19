<?php

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\AbstractAnimal;
    use troiswa\dev23\animal\Fish;
    use troiswa\dev23\animal\Swimmable;

    class Whale extends AbstractAnimal implements Swimmable
    {
        public function swim()
        {
            echo 'Whale swim!';
        }

        public function growUp()
        {
            $this->setSpeed($this->getSpeed() * 1.02);
            $this->setWeight($this->getWeight() * 1.5);
        }


    }