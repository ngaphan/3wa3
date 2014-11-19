<?php

    /**
     * Class StringUtils.
     */
    class StringUtils
    {

        /**
         * @var string current value.
         */
        private $sValue;

        /**
         * StringUtils constructor.
         *
         * @param string $sValue value.
         */
        public function __construct($sValue)
        {
            $this->sValue = $sValue;
        }

        /**
         * Get the current value.
         *
         * @return string current value.
         */
        public function getValue()
        {
            return $this->sValue;
        }

        /**
         * Get the current value's length.
         *
         * @return int value's length.
         */
        public function getLength()
        {
            return strlen($this->sValue);
        }

        /**
         * Concat a value.
         *
         * @param $sConcatValue value to concat.
         */
        public function concat($sConcatValue)
        {
            $this->sValue .= $sConcatValue;
        }

        /**
         * Test if the current value starts with $sValue.
         *
         * @param $sValue value to test.
         *
         * @return bool true if current value starts with $sValue.
         */
        public function startsWith($sValue)
        {
            $iPosition = strpos($this->sValue, $sValue);
            return ($iPosition === 0);
        }

        /**
         * Test if the current value ends with $sValue.
         *
         * @param $sValue value to test.
         *
         * @return bool true if current value ends with $sValue.
         */
        public function endsWith($sValue)
        {
            $iPosition = strrpos($this->sValue, $sValue);
            if (false === $iPosition) {
                return false;
            }
            $sTmp = substr($this->sValue, $iPosition);
            return $sTmp === $sValue;
        }

        /**
         * Is $sValue inside current value ?
         *
         * @param $sValue value to test.
         *
         * @return bool true if $sValue is inside current value.
         */
        public function isInside($sValue)
        {
            return false !== strpos($this->sValue, $sValue);
        }

        /**
         * Remove the last character.
         */
        public function removeLastChar()
        {
            $this->sValue = substr($this->sValue, 0, $this->getLength() - 1);
        }

        /**
         * Remove the nth character.
         *
         * @param integer $iNth position of char to remove.
         */
        public function removeNChar($iNth)
        {
            // cannot remove outside array character
            if (!is_int($iNth) || $iNth < 0 || $iNth > $this->getLength()) {
                return;
            }
            $sTmpValue = substr($this->sValue, 0, $iNth);
            $sTmpValue .= substr($this->sValue, $iNth + 1, $this->getLength());
            $this->sValue = $sTmpValue;
        }

        /**
         * Get the current value.
         *
         * @return string current value.
         */
        public function __toString()
        {
            return $this->getValue();
        }


    }