<?php
require_once "Area.php";

class Circle implements Area
{
    /**
     * @var float
     */
    private $radius;

    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    private function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return number_format(pi() * pow($this->getRadius(), 2), 2, '.', '');
    }
}