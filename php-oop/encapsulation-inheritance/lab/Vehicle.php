<?php

abstract class Vehicle
{
    /**
     * @var int
     */
    private $numberOfDoors;

    /**
     * @var string
     */
    private $color;

    /**
     * Vehicle constructor.
     * @param int $numberOfDoors
     * @param string $color
     */
    protected function __construct(int $numberOfDoors, string $color)
    {
        $this->setNumberOfDoors($numberOfDoors);
        $this->setColor($color);
    }

    /**
     * @return int
     */
    public function getNumberOfDoors(): int
    {
        return $this->numberOfDoors;
    }

    /**
     * @param int $numberOfDoors
     */
    private function setNumberOfDoors(int $numberOfDoors)
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    private function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @param string $color
     */
    public function paint(string $color)
    {
        $this->setColor($color);
    }
}