<?php
$input = strval(readline());
$number = new DecimalNumber($input);
$output = $number->reverseNumber();
echo $output . PHP_EOL;

class DecimalNumber
{
    private $number;

    /**
     * DecimalNumber constructor.
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this->setNumber($number);
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    private function setNumber($number)
    {
        $this->number = $number;
    }


    public function reverseNumber() :string {
        return strrev($this->number);
    }
}