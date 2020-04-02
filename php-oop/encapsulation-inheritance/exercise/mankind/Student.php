<?php

require_once "Human.php";
class Student extends Human
{
    /**
     * @var integer
     */
    private $facultyNumber;

    /**
     * Student constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $facultyNumber
     * @throws Exception
     */
    public function __construct(string $firstName, string $lastName, int $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    /**
     * @return int
     */
    public function getFacultyNumber(): int
    {
        return $this->facultyNumber;
    }

    /**
     * @param int $facultyNumber
     * @throws Exception
     */
    private function setFacultyNumber(int $facultyNumber): void
    {
        if (strlen((string)$facultyNumber) < 5 || strlen((string)$facultyNumber) > 10) {
            throw new Exception("Invalid faculty number!");
        }

        $this->facultyNumber = $facultyNumber;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "First Name: {$this->getFirstName()}
Last Name: {$this->getLastName()}
Faculty number: {$this->getFacultyNumber()}";
    }
}