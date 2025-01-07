<?php
    require_once "Book.php";
    
    // $haiLam = new Main;

    // $haiLam->name = "Hải Lam";
    // $haiLam->age = 18;
    // $haiLam->gender = "Nam";
    // $haiLam->address = "Hà Nội";

    // echo "Tên: ". $haiLam->name. "<br>";
    // echo "Tuổi: ". $haiLam->age. "<br>";
    // echo "Giới tính: ". $haiLam->gender. "<br>";
    // echo "Địa chỉ: ". $haiLam->address. "<br>";

    // $haiLam = new Main("Hải Lam", 18, "Nam", "Hà Nội");
    // echo $haiLam->name;

    $infoBook = new Book("Ngày Xưa Có 1 Con Bò", "Hải Lam", 20000);
    echo $infoBook->getInfo();

    

?>