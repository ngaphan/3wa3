<?php
    /**
     * Created by PhpStorm.
     * User: Yoann
     * Date: 03/07/14
     * Time: 16:18
     */

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\AbstractAnimal;
    use troiswa\dev23\animal\Flyable;
    use troiswa\dev23\animal\Swimmable;

    class FlyFish extends AbstractAnimal implements Flyable, Swimmable
    {
        public function fly()
        {
            echo 'I can fly... a bit...';
        }

        public function swim()
        {
            echo 'I am a good swimmer.';
        }


    }