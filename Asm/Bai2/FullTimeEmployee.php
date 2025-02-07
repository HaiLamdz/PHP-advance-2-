<?php
    class FullTimeEmployee extends Employee{
        protected $allowance;

        public function setAllowance(){
            $timeWork = date("Y") - $this->startYear;
            if($timeWork < 2){
                $this->allowance = 0;
            }else if($timeWork > 2 && $timeWork < 5){
                $this->allowance = 1000000;
            }else if($timeWork > 5 && $timeWork < 10){
                $this->allowance = 3000000;
            }else{
                $this->allowance = 5000000;
            }
        }
        
        public function __construct($name, $startYear, $position, $salary){
            parent::__construct($name, $startYear, $position, $salary);
            $this->setAllowance();
        }

        public function getSalary()
        {
            $total = $this->salary += $this->allowance;
            if($this->position === "Manager"){
                $total += 2000000;
            }
            return number_format($total) . "vnđ</br>";
        }
    }

?>