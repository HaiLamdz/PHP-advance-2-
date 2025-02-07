<?php
    abstract class Book{
        protected $codeISBN;
        protected $name;
        protected $author;
        protected $stock;
        protected $rent;

        public function __construct($codeISBN, $name, $author, $stock, $rent)
        {
            $this->codeISBN = $codeISBN;
            $this->name = $name;
            $this->author = $author;
            $this->stock = $stock;
            if($rent < -1){
                echo "Giá Thuê Phải Là Số Nguyên Dương";
                return;
            }
            $this->rent = $rent;
        }

        public function getCodeISBN(){
            return $this->codeISBN;
        }
        
        public function getRent(){
            return $this->rent;
        }

        public function getStock(){
            return $this->stock;
        }

        public function getName(){
            return $this->name;
        }

        public function getDetail(){
            return "Mã Sách: ". $this->codeISBN. ", Tên Sách: ". $this->name. ", Tác Giả: ". $this->author. ", Số Lượng: ". $this->stock. ", Giá Thuê: ". $this->rent;
        }

        public function updateStockBorrow(){
            if($this->stock < 0){
                echo "Đã Hết Sáchh Trong Kho";
                return;
            }
            $this->stock--;
        }
        public function updateStockReturn(){
                $this->stock++;
        }

        public abstract function setRent();
    }
?>