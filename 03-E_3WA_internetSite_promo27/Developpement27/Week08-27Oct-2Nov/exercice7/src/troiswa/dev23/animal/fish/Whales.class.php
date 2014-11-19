<?php

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\Fish;

    class Whales extends Fish
    {
        /**
         * @return string whales as string.
         */
        public function __toString()
        {
            return parent::__toString() . ' I am a Whales.';
        }
    }