<?php 
    require_once 'Customer.php';
    require_once 'Ordel.php';
    require_once 'Product.php';

    $kh = new Customer("haiLammm", "12345@gmail.com");
    // echo $kh->getDetail();
    // echo "</br>";
    // echo "</br>";
    $sp = new Product("Sữa Trái Cây", 20, 100);
    // echo $sp->getDetail();
    $order = new Ordel($kh);
    $order->addProduct($sp, 5);
    echo  "Chi Tiết Đơn Hàng: " . "</br>" . $order->getDetail();

?>