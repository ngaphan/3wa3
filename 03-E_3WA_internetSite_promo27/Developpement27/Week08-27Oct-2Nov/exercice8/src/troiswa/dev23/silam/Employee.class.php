<?php
    namespace troiswa\dev23\silam;

    /**
     * Class Employee
     *
     * @package troiswa\dev23\silam
     */
    class Employee
    {

        private $sName;
        private $sFirstName;
        private $oChief;
        private $iId;

        private static $iCurrentId = 100;

        public function __construct($sName, $sFirstName, Chief $oChief = null)
        {
            $this->sName = $sName;
            $this->sFirstName = $sFirstName;
            $this->oChief = $oChief;
            $this->iId = self::$iCurrentId++;
        }

        /**
         * @return Chief
         */
        public function getChief()
        {
            return $this->oChief;
        }

        /**
         * @return int id.
         */
        public function getId()
        {
            return $this->iId;
        }

        /**
         * @return string name.
         */
        public function getFullName()
        {
            return $this->sFirstName . ' ' . $this->sName;
        }

        /**
         * Get all chiefs of an employee.
         *
         * @return array all chiefs.
         */
        public function getAllChiefs()
        {
            $aChiefs = array();
            $oChief = $this;
            do {
                $oChief = $oChief->getChief();
                if (null !== $oChief) {
                    $aChiefs[] = $oChief;
                }
            } while (null !== $oChief);
            return $aChiefs;
        }

        /**
         * Display all chiefs of the current employee.
         */
        public function displayAllChiefs()
        {
            echo '<h3>Chiefs of ' . $this->getFullName() . '</h3>';

            $aAllChiefs = $this->getAllChiefs();
            if (0 === count($aAllChiefs)) {
                echo '<p>A boss does not have any chief!';
            } else {
                echo '<ul>';
                foreach ($aAllChiefs as $oChief) {
                    /* @var $oChief Chief */
                    echo '<li>' . $oChief->getFullName() . '</li>';
                }
                echo '</ul>';
            }
        }

        /**
         * @return string employee as string.
         */
        public function  __toString()
        {
            $sResult = 'Employee [' . $this->getId() . '] ' . $this->getFullName();
            if (null !== $this->oChief) {
                $sResult .= ' has ' . $this->oChief->getFullName() . ' for chief, ';
            }
            return '<p>' . $sResult . '</p>';
        }

    }
