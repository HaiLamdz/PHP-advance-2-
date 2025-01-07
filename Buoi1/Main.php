<?php 
    class Main{
        // thuộc tính (biến)
            public $name;
            public $age;
            public $gender;
            public $address;

        // phương thức (hàm)
            public function study(){

            }

            public function eat(){

            }

        // phương thức khới tạo (constructor)
            // Tự động được gọi khi khới tạo đối tượng
            // dùng để khởi tạo thuộc tính của đối tượng
            public function __construct($name, $age, $gender, $address)
            {
                $this->name = $name;
                $this->age = $age;
                $this->gender = $gender;
                $this->address = $address;
            }
    }

?>