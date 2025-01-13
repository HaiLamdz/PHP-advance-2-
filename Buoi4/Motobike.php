<?php 
    class Motobike extends vehcle{

        public function __construct($name, $speed, $status)
        {
            $this->name = $name;
            $this->speed = $speed;
            $this->status = $status;
        }
        public function Movable()
        {
            return " Có thể di chuyển";   
        }
        public function Chargeable()
        {
            return "Đổ Xăng";   
        }
        public function Coi(){
            return "Brr Brr";
        }

        public function getDetal()
        {
            echo $this->name . $this->Movable() . ',' . $this->Chargeable() . ', có âm thanh ' . $this->Coi() . '</br>';
        }
    }    

?>