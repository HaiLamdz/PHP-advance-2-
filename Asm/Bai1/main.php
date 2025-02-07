<?php
    require_once "BankAcount.php";

    $acc = new BankAcount(41421122005, "Vu Hai Lam", 10000, 123456);
    $acc->deposit(100000, 41421122005, 123456);
    $acc->getBalance(41421122005, 123456);
    $acc->withdraw(100000, 41421122005, 123456);
    $acc->getDetail();
?>