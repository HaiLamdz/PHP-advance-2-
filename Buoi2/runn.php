<?php
require_once "Animal.php";
require_once "Voi.php";
require_once "Lion.php";
require_once "Chicken.php";

$lion = new Lion('Lion', 'đực', "four legs", "30km/h");
echo "Lion :" . $lion->name . '-' . $lion->gender . '-' . $lion->legs . '-' . $lion->speed . '-' . $lion->eat() .'-' . $lion->makeSound() . '</br>'; 

$voi = new Voi("voi", "cái", 'four legs', "30km/h");
echo "voi :" . $voi->name . '-' . $voi->gender . '-' . $voi->legs . '-' . $voi->eat() .'-' . $voi->makeSound() . '</br>'; 

$chicken = new Chicken('chicken', 'cái', 'two legs', "10km/h");
echo "chicken :" . $chicken->name . '-' . $chicken->gender . '-' . $chicken->legs . '-' . $chicken->eat() .'-' . $chicken->makeSound() . '-'  . $chicken->fly() . '</br>'; 
?>
