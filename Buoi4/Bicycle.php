<?php 
    class Bicycle extends vehcle{

        public function __construct($name, $speed, $status)
        {
            $this->name = $name;
            $this->speed = $speed;
            $this->status = $status;
        }
        public function Movable()
        {
            return " Có thẻ di chuyển ";   
        }
        public function Chargeable()
        {
            return "Ko cần năng lượng";   
        }
        public function Coi(){
            return "Ring Ring";
        }
        public function getDetal()
        {
            echo $this->name . $this->Movable() . ',' . $this->Chargeable() . ', có âm thanh ' . $this->Coi() . '</br>';
        }
    }    


?>