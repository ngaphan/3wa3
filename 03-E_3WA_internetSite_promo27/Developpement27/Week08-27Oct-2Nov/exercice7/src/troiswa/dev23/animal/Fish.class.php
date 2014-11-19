<?php

    namespace troiswa\dev23\animal;


    /**
     * Class Fish
     *
     * @package troiswa\dev23\animal
     */
    class Fish extends Animal
    {

        public function swim()
        {
            echo 'I can swim !!';
        }

        /**
         * @return string fish as string.
         */
        public function __toString()
        {
            return parent::__toString() . ' I am a fish.';;
        }
    }