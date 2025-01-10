<?php 
    class Animal{
        public $name;
        public $gender;
        public $legs;

        public function __construct($name, $gender, $legs)
        {
            $this->name = $name;
            $this->gender = $gender;
            $this->legs = $legs;
        }

        public function eat(){
            echo "Ăn Thịt";
        }
    }
?>