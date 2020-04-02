<?php
require_once "Mobile.php";
require_once "TouchScreen.php";

class Tablet extends Mobile implements TouchScreen
{
    /**
     * @var string
     */
    private $resolution;

    /**
     * Tablet constructor.
     * @param string $operator
     * @param float $battery
     * @param string $resolution
     */
    public function __construct(string $operator, float $battery, string $resolution)
    {
        parent::__construct($operator, $battery);
        $this->setResolution($resolution);
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }

    /**
     * @param string $resolution
     */
    private function setResolution(string $resolution): void
    {
        $this->resolution = $resolution;
    }

    public function moveFinger(): void
    {
        // TODO: Implement moveFinger() method.
    }

    public function clickFinger(): void
    {
        // TODO: Implement clickFinger() method.
    }

    public function writeText(): string
    {
        // TODO: Implement writeText() method.
        return null;
    }
}