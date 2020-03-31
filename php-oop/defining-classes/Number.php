<?php
$number = new Number(intval(readline()));
$output = $number->findEnglishNameOfLastDigit();
echo $output . PHP_EOL;

class Number
{
    private $number;

    /**
     * Number constructor.
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function findEnglishNameOfLastDigit() :string {
        $stringNumber = strval($this->number);
        $lastDigitString = substr($stringNumber, -1);
        $lastDigitInteger = intval($lastDigitString);
        switch ($lastDigitInteger)  {
            case 0:$output = 'zero';break;
            case 1:$output = 'one';break;
            case 2:$output = 'two';break;
            case 3:$output = 'three';break;
            case 4:$output = 'four';break;
            case 5:$output = 'five';break;
            case 6:$output = 'six';break;
            case 7:$output = 'seven';break;
            case 8:$output = 'eight';break;
            case 9:$output = 'nine';break;
        }
        if (!empty($output)) {
            return $output;
        }
        return null;
    }
}