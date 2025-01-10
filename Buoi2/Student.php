<?php 
require_once 'Person.php';
class Student extends Person{
    public $maSV;
    public $major;

    // override (ghi đè phương thức)
    public function __construct($name, $age, $adress, $maSV, $major){
        parent::__construct($name, $age, $adress);  // Gọi phương thức khởi tạo của lớp cha
        $this->maSV = $maSV;
        $this->major = $major;
    }
}


$sv1 = new Student("HaiLam", 19, "Hà Nội", "PH56233", "CNTT" );
echo $sv1->name;
?>