<?php

    namespace troiswa\dev23\animal\bird;


    use troiswa\dev23\animal\Bird;

    class Eagle extends Bird
    {
        /**
         * @return string eagle as string.
         */
        public function __toString()
        {
            return parent::__toString() . ' I am an Eagle.';
        }
    }