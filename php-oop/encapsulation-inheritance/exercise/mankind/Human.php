<?php


abstract class Human
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @throws Exception
     */
    protected function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @throws Exception
     */
    private function setFirstName(string $firstName): void
    {
        $this->checkLength($firstName, "firstName", 4);
        $this->isUpperCase($firstName{0}, "firstName");
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @throws Exception
     */
    private function setLastName(string $lastName): void
    {
        $this->checkLength($lastName, "lastName", 3);
        $this->isUpperCase($lastName{0}, "lastName");
        $this->lastName = $lastName;
    }

    /**
     * @param string $char
     * @param string $arg
     * @return bool
     * @throws Exception
     */
    private function isUpperCase(string $char, string $arg): bool
    {
        if (!ctype_upper($char)) {
            throw new Exception("Expected upper case letter! Argument: $arg");
        }
        return true;
    }

    /**
     * @param string $name
     * @param string $strArg
     * @param int $arg
     * @return bool
     * @throws Exception
     */
    private function checkLength(string $name, string $strArg, int $arg): bool
    {
        if (strlen($name) < $arg) {
            throw new Exception("Expected length at least {$arg} symbols! Argument: {$strArg}.");
        }
        return true;
    }
}