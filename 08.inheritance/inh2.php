<?php

class Person1
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello()
    {
        return 'Hello from Person1';
    }

}

class Employee extends Person1{
    private $salary;

    /**
     * @param $salary
     */
    public function __construct($name, $age, $phone, $salary)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am the employee: $this->name";
    }
}

class Student extends Person1
{

    public $studentNo;

    public function __construct($name, $age, $phone, $studentNo)
    {
        parent::__construct($name, $age, $phone);
        $this->$studentNo = $studentNo;
    }

    public function hello()
    {
        return "Hello! I am the: $this->name, i am a student. I have NO: $this->studentNo";
    }

}

$employee = new Employee('Jane', 23, '4343432', 3900);
$student = new Student('Mark', 20, '434353', '12345');
//echo $employee->hello();
echo $student->hello();