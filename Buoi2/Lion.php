<?php 
    class Lion extends Animal{
        public $speed;

        public function __construct($name, $gender, $legs, $speed)
        {
            parent::__construct($name, $gender, $legs);
            $this->speed = $speed;
        }

        public function makeSound(){
            return "road";
        }
        public function eat(){
            return "ăn thịt";
        }
    }
?>