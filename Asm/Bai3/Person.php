<?php
    class Person{
        protected $name;

        public function __construct($name){
            if(strlen($name) < 9){
                return "Tên Người Dùng Phải Lớn Hơn 9 Ký Tự";
            }
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }
?>
