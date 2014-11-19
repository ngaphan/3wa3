<?php

    namespace troiswa\dev23\silam;


    /**
     * Class Chief
     *
     * @package troiswa\dev23\silam
     */
    class Chief extends Employee
    {

        /**
         * @return string chief as string.
         */
        public function __toString()
        {
            $sReturn = $this->getFullName() . ' [' . $this->getId() . '] ';
            if (null === $this->getChief()) {
                $sReturn .= ' is the boss, he does not have a chief !';
            } else {
                $sReturn .= ' is a chief, and his chief is ' . $this->getChief()->getFullName();
            }
            return '<p>' . $sReturn . '</p>';
        }
    }