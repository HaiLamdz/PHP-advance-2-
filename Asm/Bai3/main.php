<?php

    require_once "Book.php";
    require_once "Novel.php";
    require_once "Comic.php";
    require_once "Borrowable.php";
    require_once "Person.php";
    require_once "Menber.php";

    $book1 = new Comic("ABC", "Book 1", "Author", 18, 10000);
    $book2 = new Comic("ASD", "Book 2", "Author", 18, 12000);
    $book3 = new Comic("XYZ", "Book 3", "Author", 18, 16000);
    $book4 = new Comic("GHA", "Book 4", "Author", 18, 22000);
    $book5 = new Comic("NME", "Book 5", "Author", 18, 17000);
    $book6 = new Comic("CCM", "Book 6", "Author", 18, 9000);
    // $book1->setRent();
    

    $member = new Menber("Nguyễn Văn A", "VIP");
    // $member->getLimit();
    $member->borrow($book1);
    $member->borrow($book2);
    $member->borrow($book3);
    $member->borrow($book4);
    $member->borrow($book5);
    $member->borrow($book6);
    $member->borrow($book6);
    $member->returnItem($book4, "2025-02-10");
    $member->returnItem($book5, "2025-02-15");
    $member->getTotalRent();
