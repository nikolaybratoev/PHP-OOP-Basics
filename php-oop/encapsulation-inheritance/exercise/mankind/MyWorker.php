<?php

require_once "Human.php";
class MyWorker extends Human
{
    /**
     * @var float
     */
    private $weekSalary;

    /**
     * @var float
     */
    private $workHoursPerDay;

    /**
     * Worker constructor.
     * @param string $firstName
     * @param string $lastName
     * @param float $weekSalary
     * @param float $workHoursPerDay
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, float $weekSalary, float $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    /**
     * @return float
     */
    public function getWeekSalary(): float
    {
        return $this->weekSalary;
    }

    /**
     * @param float $weekSalary
     * @throws Exception
     */
    private function setWeekSalary(float $weekSalary): void
    {
        if ($weekSalary < 10) {
            throw new Exception("Expected value mismatch! Argument: weekSalary");
        }

        $this->weekSalary = $weekSalary;
    }

    /**
     * @return float
     */
    public function getWorkHoursPerDay(): float
    {
        return $this->workHoursPerDay;
    }

    /**
     * @param float $workHoursPerDay
     * @throws Exception
     */
    private function setWorkHoursPerDay(float $workHoursPerDay): void
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
            throw new Exception("Expected value mismatch! Argument: workHoursPerDay");
        }

        $this->workHoursPerDay = $workHoursPerDay;
    }

    /**
     * @return string
     */
    private function salaryPerHour(): string
    {
        $number = ($this->getWeekSalary() / 7) / $this->getWorkHoursPerDay();
        $number = number_format($number, 2, '.', '');
        return strval($number);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "First Name: {$this->getFirstName()}
Last Name: {$this->getLastName()}
Week Salary: {$this->getWeekSalary()}
Hours per day: {$this->getWorkHoursPerDay()}
Salary per hour: {$this->salaryPerHour()}";
    }
}