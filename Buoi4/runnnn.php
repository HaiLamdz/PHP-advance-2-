<?php
    require_once 'vehcle.php';
    require_once 'Bicycle.php';
    require_once 'Motobike.php';
    require_once 'Car.php';
    
    $bike = new Bicycle('Xe Đạp A', '50', 'Không');
    $bike->getDetal() ;
    $Car = new Car('Ô tô B', '200', " đang hỏng ");
    $Car->getDetal() ;
    $moto = new Motobike('Xe Máy C', '100', "Không");
    $moto->getDetal();


?>