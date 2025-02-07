<?php

require_once "A/Student.php";
require_once "B/Student.php";

use \A\Student;
use \B\Student as StudentB;
$s1 = new Student();// gọi đến class student của thư mục A
$s2 = new StudentB();// gọi đến class student của thư mục B

// Namespace: cơ chế trong php giúp góm nhóm các class. giúp tránh xung đột giữa các class trùng tên
// tên của Namespace phải trùng với tên thư mục chứa class đó
