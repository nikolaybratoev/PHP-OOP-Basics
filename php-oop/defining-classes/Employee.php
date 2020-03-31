<?php
$n = intval(readline());
$people = [];
for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    $employee = null;
    if (count($input) == 4) {
        $name = strval($input[0]);
        $salary = floatval($input[1]);
        $position = strval($input[2]);
        $department = strval($input[3]);
        $employee = new Employee($name, $salary, $position, $department);
    } elseif (count($input) == 5) {
        if (is_numeric($input[4])) {
            $name = strval($input[0]);
            $salary = floatval($input[1]);
            $position = strval($input[2]);
            $department = strval($input[3]);
            $age = intval($input[4]);
            $email = "";
            $employee = new Employee($name, $salary, $position, $department, $email, $age);
        } else {
            $name = strval($input[0]);
            $salary = floatval($input[1]);
            $position = strval($input[2]);
            $department = strval($input[3]);
            $email = strval($input[4]);
            $employee = new Employee($name, $salary, $position, $department, $email, $age = 0);
        }
    } else {
        $name = strval($input[0]);
        $salary = floatval($input[1]);
        $position = strval($input[2]);
        $department = strval($input[3]);
        $email = strval($input[4]);
        $age = intval($input[5]);
        $employee = new Employee($name, $salary, $position, $department, $email, $age);
    }
    $people[$i] = $employee;
}

print_r($people);

class Employee
{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     * @param $position
     * @param $department
     * @param $email
     * @param $age
     */
    public function __construct(string $name, float $salary, string $position,
                                string $department, string $email = null, int $age = 0)
    {
        $this->setName($name);
        $this->setSalary($salary);
        $this->setPosition($position);
        $this->setDepartment($department);
        $this->setEmail($email);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    private function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    private function setPosition(string $position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     */
    private function setDepartment(string $department)
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    private function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    private function setAge(int $age)
    {
        $this->age = $age;
    }
}