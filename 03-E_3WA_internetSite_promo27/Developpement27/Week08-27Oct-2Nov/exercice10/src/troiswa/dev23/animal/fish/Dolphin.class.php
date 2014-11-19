<?php

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\AbstractAnimal;
    use troiswa\dev23\animal\Fish;
    use troiswa\dev23\animal\Swimmable;

    class Dolphin extends AbstractAnimal implements Swimmable
    {
        public function swim()
        {
            echo 'Dolphin swim!';
        }

    }