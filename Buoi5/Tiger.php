<?php 
    class Tiger extends Animal implements Communicable{

        public function __construct($name, $species, $speed)
        {
            $this->name = $name;
            $this->species = $species;
            $this->speed = $speed;
        }
        public function Movable()
        {
            return " Chay";   
        }
        public function eat()
        {
            return "Ăn Thịt";   
        }

        public function makeSound($sound)
        {
            echo $sound;
        }

        public function changeSpeed(){
            return $this->speed * 0.277778;
        }
        public function getDetail(){
            echo "Name: ". $this->name. " Species: ". $this->species. " Speed: ". $this->speed. " km/h or " . $this->changeSpeed() ."m/s</br>" ;
        }
    }
?>