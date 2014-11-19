<?php

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\Fish;

    class Shark extends Fish
    {
        /**
         * @return string shark as string.
         */
        public function __toString()
        {
            return parent::__toString() . ' I am a Shark.';
        }
    }