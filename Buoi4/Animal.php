<?php
    // interface Animal{
    //     // interface ko có thuộc tính, chỉ có phương thức
    //     public function eat();
    //     public function sleep();
    //     public function makeSound($sound);
    // }

    // interface Log{
    //     public function writeLog();
    // }

    // lớp trừu tượng
    abstract class Animal{
        protected $place;
        public function setPlace(){
            return $this->place;
        }
        // Phương thức trừu tượng (asbtract method)
        public abstract function eat();
        public abstract function makeSound($sound);
    }
?>