<?php

    namespace troiswa\dev23\animal\fish;


    use troiswa\dev23\animal\Fish;

    class Dolphin extends Fish
    {
        /**
         * @return string dolphin as string.
         */
        public function __toString()
        {
            return parent::__toString() . ' I am a Dolphin.';
        }
    }