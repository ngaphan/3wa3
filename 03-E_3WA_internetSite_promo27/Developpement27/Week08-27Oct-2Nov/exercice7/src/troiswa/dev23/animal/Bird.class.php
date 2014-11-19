<?php

    namespace troiswa\dev23\animal;


    /**
     * Class Fish
     *
     * @package troiswa\dev23\animal
     */
    class Bird extends Animal
    {

        public function fly()
        {
            echo 'I believe I can fly...';
        }

        /**
         * @return string bird as string.
         */
        public function __toString()
        {
            return parent::__toString() . ' I am a bird.';;
        }
    }