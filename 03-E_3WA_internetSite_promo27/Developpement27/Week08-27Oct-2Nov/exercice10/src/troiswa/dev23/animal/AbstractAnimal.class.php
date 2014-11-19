<?php

    namespace troiswa\dev23\animal;


    class AbstractAnimal
    {
        private $sName;
        private $fSpeed = 1;
        private $fWeight = 1;
        private $iHP = 100;

        public function __construct($sName)
        {
            $this->sName = $sName;
        }

        /**
         * @param mixed $fSpeed
         */
        public function setSpeed($fSpeed)
        {
            $this->fSpeed = $fSpeed;
        }

        /**
         * @return mixed
         */
        public function getSpeed()
        {
            return $this->fSpeed;
        }

        /**
         * @param mixed $fWeight
         */
        public function setWeight($fWeight)
        {
            $this->fWeight = $fWeight;
        }

        /**
         * @return mixed
         */
        public function getWeight()
        {
            return $this->fWeight;
        }

        /**
         * Reduce the current animal $iHPToRemove points.
         *
         * @param $iHPToRemove HP to reduce.
         */
        protected function reduceHP($iHPToRemove)
        {
            // should be an integer
            if (!is_int($iHPToRemove)) {
                return;
            }
            // if fatal attack
            if ($this->iHP - $iHPToRemove <= 0) {
                $this->iHP = 0;
            } else {
                $this->iHP -= $iHPToRemove;
            }
        }

        /**
         * @return mixed
         */
        public function getHP()
        {
            return $this->iHP;
        }

        /**
         * @param mixed $sName
         */
        public function setName($sName)
        {
            $this->sName = $sName;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->sName;
        }


        /**
         * Default grow up.
         */
        public function growUp()
        {
            $this->fSpeed = $this->fSpeed * 1.1;
            $this->fWeight = $this->fWeight * 1.2;
        }

    }