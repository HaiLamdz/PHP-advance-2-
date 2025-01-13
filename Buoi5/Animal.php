<?php
    abstract class Animal{
        protected $name;
        protected $species;
        protected $speed;

        public function getInfo(){
             $this->name;
             $this->species;
             $this->speed;
        }

        public abstract function eat();
        public abstract function Movable();

        public abstract function changeSpeed();
        public abstract function getDetail();
    }
?>