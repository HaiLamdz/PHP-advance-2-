<?php
    class Employee{
        protected $name;
        protected $startYear;
        protected $position;
        protected $salary;

        public function __construct($name, $startYear, $position, $salary){
            $this->name = $name;
            $this->startYear = $startYear;
            $this->position = $position;
            $this->salary = $salary;
        }

        public function getName(){
            return $this->name;
        }

        public function getSalary(){
            echo $this->salary;
        }
    }
?>