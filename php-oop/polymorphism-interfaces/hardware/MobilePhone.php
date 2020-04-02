<?php
require_once "Mobile.php";
require_once "TouchScreen.php";

class MobilePhone extends Mobile implements TouchScreen
{
    /**
     * @var float
     */
    private $size;

    /**
     * MobilePhone constructor.
     * @param string $operator
     * @param float $battery
     * @param float $size
     */
    public function __construct(string $operator, float $battery, float $size)
    {
        parent::__construct($operator, $battery);
        $this->setSize($size);
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @param float $size
     */
    private function setSize(float $size): void
    {
        $this->size = $size;
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