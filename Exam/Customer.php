<?php 
    class Customer{
        private $name;
        private $email;

        public function __construct($name, $email){
            if(strlen($name) > 7){
                $this->name = $name;
            }else{
                echo "Tên Ít nhất 8 ký tự";
            }
            $testMail = '/^\\S+@\\S+\\.\\S+$/';
            if(preg_match($testMail, $email)){
                $this->email = $email;
            }else{
                echo "Email không hợp lệ";
            }
        }

        public function getDetail(){
            return "Name: ".$this->name. "-" . "Email: ".$this->email;
        }
    }

?>