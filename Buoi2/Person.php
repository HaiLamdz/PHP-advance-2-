<?php
class Person{

    public $name;
    public $age;
    public $adress;
    
    public function __construct($name, $age, $adress){
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
    }

    public function run(){
        echo "Ran";
    }
}
?>