<?php

    /**
     * Class Student.
     */
    class Student
    {

        /**
         * @var string name.
         */
        private $sName;

        /**
         * @var date birthday.
         */
        private $dBirthday;

        /**
         * @var string address.
         */
        private $sAddress;

        /**
         * @var array notes.
         */
        private $aNotes;

        /**
         * Student constructor.
         *
         * @param string $sName     name.
         * @param date   $dBirthday birthday.
         * @param string $sAddress  address.
         */
        public function __construct($sName, $dBirthday, $sAddress)
        {
            $this->setName($sName);
            $this->setBirthday($dBirthday);
            $this->setAddress($sAddress);
            $this->aNotes = array();
        }

        /**
         * @param date $dBirthday birthday.
         */
        public function setBirthday($dBirthday)
        {
            $this->dBirthday = $dBirthday;
        }

        /**
         * @return date birthday.
         */
        public function getBirthday()
        {
            return $this->dBirthday;
        }

        /**
         * @param string $sAddress
         */
        public function setAddress($sAddress)
        {
            $this->sAddress = $sAddress;
        }

        /**
         * @return string
         */
        public function getAddress()
        {
            return $this->sAddress;
        }

        /**
         * @param string $sName
         */
        public function setName($sName)
        {
            $this->sName = $sName;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->sName;
        }

        /**
         * @return array notes.
         */
        public function getNotes()
        {
            return $this->aNotes;
        }

        /**
         * @param float $fNote note to add.
         */
        public function addNote($fNote)
        {
            if (is_float($fNote)) {
                $this->aNotes[] = $fNote;
            }
        }

        /**
         * Get the average note of the current student.
         *
         * @return float average note.
         */
        public function getAverage()
        {
            $fSum = 0.0;
            foreach ($this->aNotes as $fNote) {
                $fSum += $fNote;
            }
            $fAverage = $fSum / count($this->aNotes);
            // get only 2 digits after comma
            $fAverage = floatval(number_format($fAverage, 2));
            return $fAverage;
        }

        /**
         * Get the minimum note.
         *
         * @return float min note.
         */
        public function getMin()
        {
            if (count($this->aNotes) === 0) {
                return 0;
            }
            $fMin = $this->aNotes[0];
            foreach ($this->aNotes as $fNote) {
                if ($fNote < $fMin) {
                    $fMin = $fNote;
                }
            }
            return $fMin;
        }

        /**
         * Get the maximum note.
         *
         * @return float max note.
         */
        public function getMax()
        {
            if (count($this->aNotes) === 0) {
                return 0;
            }
            $fMax = $this->aNotes[0];
            foreach ($this->aNotes as $fNote) {
                if ($fNote > $fMax) {
                    $fMax = $fNote;
                }
            }
            return $fMax;
        }

        /**
         * Get the student as a string.
         *
         * @return string student as string.
         */
        public function __toString()
        {
            return $this->getName() . ', born on ' . $this->getBirthday() . '. Live in ' . $this->getAddress();
        }

        /**
         * Compare with another student.
         *
         * @param Student $oOtherStudent other student.
         *
         * @return int < 0 if current student is less than other student
         *              > 0 if current student is greater than other student
         *              and 0 if they are equal.
         */
        public function compareTo(Student $oOtherStudent)
        {
            $fOtherAverage = $oOtherStudent->getAverage();
            $fCurrentAverage = $this->getAverage();

            if ($fCurrentAverage === $fOtherAverage) {
                return 0;
            } elseif ($fCurrentAverage > $fOtherAverage) {
                return 1;
            } else {
                return -1;
            }
        }

    }