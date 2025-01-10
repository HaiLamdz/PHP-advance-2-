<?php 
    class Product{
        private $name;
        private $price;
        private $stock;

        public function __construct($name, $price, $stock){
            if(strlen($name) > 7 ){
                $this->name = $name;
            }else{
                echo "ko đủ điều kiện";
            }
            if($price > 0){
                $this->price = $price;
            }else{
                echo "ko đủ điều kiện";
            }
            if($stock > 0){
                $this->stock = $stock;
            }else{
                echo "ko đủ điều kiện";
            }
        }

        public function getName(){
            return $this->name;
        }
        public function getDetail(){
            return "Name: ". $this->name. " Price: ". $this->price." Stock: ". $this->stock. "</br>";
        }

        public function getPrice(){
            return $this->price;
        }

        public function getStock(){
            return  $this->stock;
        }

        public function updateStock($quantity){
            if($quantity < $this->stock){
                $this->stock -= $quantity;
            }
        }

    }

?>