<?php
require_once "Area.php";

class Rectangle implements Area
{
    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Rectangle constructor.
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    private function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    private function setHeight(float $height): void
    {
        $this->height = $height;
    }


    /**
     * @inheritDoc
     */
    function getArea(): float
    {
        return number_format($this->getHeight() * $this->getWidth(), 2, ',', '');
    }
}