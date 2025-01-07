<?php

class Book {

    public $title;
    public $author;
    public $price;
    public function __construct($tieuDe, $tacGia, $giaTien)
    {
        $this->title = $tieuDe;
        $this->author = $tacGia;
        $this->price = $giaTien;
    }

    public function getInfo(){
        echo $this->title . "</br>";
        echo $this->author ."</br>"; 
        echo $this->applyDiscount(10);
    }

    public function applyDiscount($percent){
        $discount = $this->price *$percent / 100;
        echo $this->price -= $discount;
    }

    // Hàm Hủy 
    // Chạy khi kết thúc chương trình hoặc khi hủy object bằng tay
    // Tác dụng: Giải phóng bộ nhớ
    public function __destruct()
    {
        
    }
}
