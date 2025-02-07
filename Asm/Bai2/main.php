<?php
    require_once 'Employee.php';
    require_once 'FullTimeEmployee.php';
    require_once 'PartTimeEmployee.php';

    $nv1 = new FullTimeEmployee("Vũ Hải Lam", 2017, "Manager", 1000000);
    echo $nv1->getSalary();
    $nv2 = new PartTimeEmployee("Vũ Hải Lam", 2017, "Manager", 20, 20000);
    echo $nv2->getSalary();
?>