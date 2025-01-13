<?php 
    require_once 'Animal.php';
    require_once 'Communicable.php';
    require_once 'Bird.php';
    require_once 'Fish.php';
    require_once 'Tiger.php';

    $tiger = new Tiger("Tiger", "Động Vật Trên Cạn", "150");
    $tiger->getDetail();
    $fish = new Fish("Fish", "Động Vật Dưới Nước", 30);
    $fish->getDetail();
?>