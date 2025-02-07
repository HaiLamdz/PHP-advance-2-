<?php 
    require_once 'Account.php';
    require_once 'Coures.php';
    require_once 'ContentCourse.php';
    require_once 'Payment.php';

    $std1 = new Account("Vũ Hải Lam","vuhailam2112@gmail.com", '12345678');
    $std1->updateAccount(['role' => 'teacher']);
    // $std1->getInfo();
    $course = new Coures("Teacher 1", $std1, 20, '21/12/2024' , '12/01/2025' );
    $course->updateCourse(['name'=> 'Khóa Học 1']);
    $course->getCourseInfo();
    $content = new ContentCourse($course, "Nội Dung 1");
    // $content->getContent($course->getName());

    $pay = new Payment($course, $std1, '21/12/2005', 'sucsessful');
    // $pay->orderDetail();

?>