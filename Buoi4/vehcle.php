<?php 
    // interface vehcle{
    //     public function Movable();
    //     public function Chargeable();
    // }

    abstract class vehcle{
        protected $name;
        protected $speed;
        protected $status;
        public function getInfo(){
            return $this->name;
            return $this->speed;
            return $this->status;
        }
        public abstract function Movable();
        public abstract function Chargeable();
        public abstract function Coi();
        public abstract function getDetal();
    }
?>