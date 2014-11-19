<?php

namespace troiswa\dev23\tools;

/**
 * Class RandomTools.
 */
class RandomTools
{

    /**
     * @var int minimum value.
     */
    private $iMin;

    /**
     * @var int maximum value.
     */
    private $iMax;

    /**
     * @var int last generated number.
     */
    private $iLastGenerated = null;

    /**
     * @var array all generated numbers.
     */
    private $aGenerated = array();

    /**
     * Constructor.
     *
     * @param int $iMin
     * @param int $iMax
     */
    public function __construct($iMin, $iMax)
    {
        $this->setMin($iMin);
        $this->setMax($iMax);
    }

    /**
     * @param int $iMax
     */
    public function setMax($iMax)
    {
        if (is_integer($iMax)) {
            $this->iMax = $iMax;
            $this->aGenerated = array();
        }
    }

    /**
     * @return int maximum
     */
    public function getMax()
    {
        return $this->iMax;
    }

    /**
     * @param int $iMin minimum
     */
    public function setMin($iMin)
    {
        if (is_integer($iMin)) {
            $this->iMin = $iMin;
            $this->aGenerated = array();
        }
    }

    /**
     * @return int minimum
     */
    public function getMin()
    {
        return $this->iMin;
    }

    /**
     * Generate a random number.
     *
     * @return int random number.
     */
    public function generate()
    {
        $this->iLastGenerated = rand($this->iMin, $this->iMax);
        $this->aGenerated[] = $this->iLastGenerated;
        return $this->iLastGenerated;
    }

    /**
     * Get the last generated number.
     *
     * @return int last generated number.
     */
    public function getLastGenerated()
    {
        return $this->iLastGenerated;
    }

    /**
     * Get all generated numbers.
     *
     * @return array all generated numbers.
     */
    public function getAllGenerated()
    {
        return $this->aGenerated;
    }

    /**
     * Perform a better generation.
     *
     * @param int $iGeneratedQuantity generated number quantity.
     *
     * @return int median generated number.
     */
    public function betterGenerate($iGeneratedQuantity)
    {
        $this->aGenerated = array();
        // generate enough numbers
        for ($iPosition = 0; $iPosition < $iGeneratedQuantity; $iPosition++) {
            $this->generate();
        }

        // create an array containing [number] => quantity
        $aAllNumbers = array();
        foreach ($this->aGenerated as $iNumber) {
            if (!array_key_exists($iNumber, $aAllNumbers)) {
                $aAllNumbers[$iNumber] = 0;
            }
            $aAllNumbers[$iNumber]++;
        }

        // reverse sort by values/quantities
        arsort($aAllNumbers);

        // restart the array to the first position
        reset($aAllNumbers);

        // get the first key
        return key($aAllNumbers);
    }
}