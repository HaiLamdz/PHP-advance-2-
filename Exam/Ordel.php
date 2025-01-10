<?php 
    class Ordel{
        private $customer;
        private $product;
        private $quanity;
        private $totalPrice = 0;

        public function __construct($customer)
        {
            $this->customer = $customer;
        }

        public function addProduct($product, $quanity){
            if($quanity > $product->getStock() && $quanity <  0){
                echo "Là số dương, nhỏ hơn stock trong kho sản phẩm";
            }else{
                $product->updateStock($quanity);
                $this->product = $product;
                $this->quanity = $quanity;
                $this->caculateTotalPrice();
            }
        }

        public function caculateTotalPrice(){
             $this->totalPrice += $this->product->getPrice() * $this->quanity;
            return $this->totalPrice;
        }

        public function getDetail(){
            return "Customer: " ."</br>". $this->customer->getDetail()."</br>" . 'Product: ' . "</br>" . 'Name: ' . $this->product->getName() . ' Price: ' . $this->product->getPrice() . ' Quantity: ' . $this->quanity ."</br>". ' Tổng: ' . $this->caculateTotalPrice();
        }
    }

?>