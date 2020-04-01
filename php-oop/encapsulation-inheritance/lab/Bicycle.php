<?php
require_once "Vehicle.php";
class Bicycle extends Vehicle
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

    private $forSkirt;

    /**
     * Bicycle constructor.
     * @param string $color
     * @param string $brand
     * @param string $model
     * @param string $year
     * @param bool $forSkirt
     */
    public function __construct(string $color, string $brand, string $model, string $year, bool $forSkirt)
    {
        parent::__construct(0, $color);
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setYear($year);
        $this->setForSkirt($forSkirt);
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

    /**
     * @return bool
     */
    public function isForSkirt(): bool
    {
        return $this->forSkirt;
    }

    /**
     * @param bool $forSkirt
     */
    private function setForSkirt(bool $forSkirt)
    {
        $this->forSkirt = $forSkirt;
    }

    public function __toString() : string
    {
        if ($this->isForSkirt()) {
            $output = "Yes";
        } else {
            $output = "No";
        }
        return printf("%s %s - is for skirt: %s\n",
                        $this->getBrand(),
                        $this->getYear(),
                        $output);
    }
}

$bicycle = new Bicycle('black', 'balkan', '90', '1990', true);

echo $bicycle . PHP_EOL;