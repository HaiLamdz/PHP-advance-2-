<?php
    class PartTimeEmployee extends Employee{
        protected $hoursWork; // Giờ Làm Việc
        protected $hourlyRate; // Lương Làm Việc Trên 1 Giờ

     
        public function __construct($name, $startYear, $position, $hoursWork, $hourlyRate)
        {
            parent::__construct($name, $startYear, $position, 0);
            $this->hoursWork = $hoursWork;
            $this->hourlyRate = $hourlyRate;
            // $this->getSalary();
        }

        public function getSalary()
        {
            $total = $this->hoursWork * $this->hourlyRate;
            if($this->position === "Manager"){
                $total += 1000000;
            }
                return "Tổng Lương Của " . $this->name . " là: " . number_format($total) . "vnđ";
        }



    }

?>