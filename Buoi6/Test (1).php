<?php

// 1. Quản lý tài khoản
abstract class Account {
    protected $id;
    protected $username;
    protected $password;
    protected $role;
    
    public function __construct($id, $username, $password, $role) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }
    
    abstract public function getDetails();
}

class Student extends Account {
    public function getDetails() {
        return "Student: {$this->username}";
    }
}

class Teacher extends Account {
    public function getDetails() {
        return "Teacher: {$this->username}";
    }
}

class Admin extends Account {
    public function getDetails() {
        return "Admin: {$this->username}";
    }
}

// 2. Quản lý khóa học
class Course {
    private $id;
    private $title;
    private $teacher;
    private $price;
    
    public function __construct($id, $title, Teacher $teacher, $price) {
        $this->id = $id;
        $this->title = $title;
        $this->teacher = $teacher;
        $this->price = $price;
    }
    
    public function getCourseDetails() {
        return "Course: {$this->title}, Taught by: {$this->teacher->getDetails()}";
    }
}

// 3. Quản lý nội dung khóa học
class CourseContent {
    private $course;
    private $materials = [];
    
    public function __construct(Course $course) {
        $this->course = $course;
    }
    
    public function addMaterial($material) {
        $this->materials[] = $material;
    }
    
    public function getMaterials() {
        return $this->materials;
    }
}

// 4. Quản lý mua khóa học, thanh toán
class Payment {
    private $account;
    private $course;
    private $status;
    
    public function __construct(Account $account, Course $course) {
        $this->account = $account;
        $this->course = $course;
        $this->status = 'Pending';
    }
    
    public function completePayment() {
        $this->status = 'Completed';
    }
    
    public function getStatus() {
        return $this->status;
    }
}

// 5. Theo dõi tiến trình học tập
class Progress {
    private $student;
    private $course;
    private $completion;
    
    public function __construct(Student $student, Course $course) {
        $this->student = $student;
        $this->course = $course;
        $this->completion = 0;
    }
    
    public function updateProgress($percent) {
        $this->completion = $percent;
    }
    
    public function getProgress() {
        return $this->completion;
    }
}

// 6. Thống kê
trait Statistics {
    public function totalRevenue($payments) {
        $total = 0;
        foreach ($payments as $payment) {
            if ($payment->getStatus() === 'Completed') {
                $total += $payment->course->price;
            }
        }
        return $total;
    }
    
    public function totalStudents($students) {
        return count($students);
    }
}

class Report {
    use Statistics;
}

?>
