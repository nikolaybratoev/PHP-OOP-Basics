<?php
require_once "Vehicle.php";

class Car extends Vehicle
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $year;

    /**
     * Car constructor.
     * @param int $numberOfDoors
     * @param string $color
     * @param string $brand
     * @param string $model
     * @param string $year
     */
    public function __construct(int $numberOfDoors, string $color,
                                string $brand, string $model, string $year)
    {
        parent::__construct($numberOfDoors, $color);
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setYear($year);
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    private function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    private function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    private function setYear(string $year)
    {
        $this->year = $year;
    }
}

$car = new Car(4, 'Red', 'Audi', 'A4', '2016');
print_r($car);
