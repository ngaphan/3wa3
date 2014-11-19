<?php
    namespace troiswa\dev23\animal;

    use troiswa\dev23\animal\bird\Eagle;
    use troiswa\dev23\animal\fish\Dolphin;
    use troiswa\dev23\animal\fish\Shark;
    use troiswa\dev23\animal\fish\Whales;

    /**
     * Class Animal
     *
     * @package troiswa\dev23\animal
     */
    class Animal
    {

        private $sName;

        public function __construct($sName)
        {
            $this->sName = $sName;
        }

        /**
         * @return string animal as string.
         */
        public function  __toString()
        {
            return 'My name is ' . $this->sName . '.';
        }


        public static function randomCreate($sName)
        {
            $aAnimals = [new Eagle($sName), new Shark($sName), new Dolphin($sName), new  Whales($sName)];
            $iRandom = rand(0, count($aAnimals) - 1);

            return $aAnimals[$iRandom];
        }
    }
