<?php

    abstract class Human
    {
        protected $name;
        protected $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public abstract function printInfo();

    }

    class Student extends Human
    {
        public function printInfo()
        {
            return "My name is " . $this->name . " and " . $this->age . " years old. I'm a Student";
        }
    }

    class Teacher extends Human
    {
        public function printInfo()
        {
            return "My name is " . $this->name . " and " . $this->age . " years old. I'm a Teacher";
        }
    }

    $human = new Teacher('Maki', '23');
    echo $human->printInfo();

?>