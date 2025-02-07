<?php
class Coures
{
    protected $name;
    protected Account $teacher;
    protected $price;
    protected $startTime;
    protected $endTime;
    protected $testDate = "/^[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}$/";
    

    public function __construct($name, Account $teacher, $price, $startTime, $endTime)
    {
        if (is_string($name) && strlen($name) > 0) {
            $this->name = $name;
        } else {
            echo "Tên khóa học phải là một chuỗi và không được rỗng.";
            die();
        }

        if ($teacher instanceof Account) {
            $this->teacher = $teacher;
        } else {
            echo "Giáo viên phải là một đối tượng thuộc lớp Account.";
            die();
        }

        if (is_numeric($price) && $price > 0) {
            $this->price = $price;
        } else {
            echo "Giá phải là một số và lớn hơn 0.";
            die();
        }
        if (preg_match($this->testDate, $startTime)) {
            $this->startTime = $startTime;
        } else {
            echo "Thời gian bắt đầu không hợp lệ.";
            die();
        }

        if (preg_match($this->testDate, $endTime)) {
            $this->endTime = $endTime;
        } else {
            echo "Thời gian kết thúc không hợp lệ hoặc không lớn hơn thời gian bắt đầu.";
            die();
        }
    }


    public function updateCourse($data)
    {
        if (isset($data['name'])) {
            if (is_string($data['name']) && strlen($data['name']) > 0) {
                $this->name = $data['name'];
            } else {
                echo "Tên khóa học phải là một chuỗi và không được rỗng.";
                die();
            }
        }

        if (isset($data['teacher'])) {
            if ($data['teacher'] instanceof Account) {
                $this->teacher = $data['teacher'];
            } else {
                echo "Giáo viên phải là một đối tượng thuộc lớp Account.";
                die();
            }
        }

        if (isset($data['price'])) {
            if (is_numeric($data['price']) && $data['price'] > 0) {
                $this->price = $data['price'];
            } else {
                echo "Giá phải là một số và lớn hơn 0.";
                die();
            }
        }

        if (isset($data['startTime'])) {
            if (preg_match($this->testDate, $data['startTime'])) {
                $this->startTime = $data['startTime'];
            } else {
                echo "Thời gian bắt đầu không hợp lệ.";
                die();
            }
        }

        if (isset($data['endTime'])) {
            if (preg_match($this->testDate, $data['endTime']) && $data['endTime'] > $this->startTime) {
                $this->endTime = $data['endTime'];
            } else {
                echo "Thời gian kết thúc không hợp lệ hoặc không lớn hơn thời gian bắt đầu.";
                die();
            }
        }
    }

    public function getCourseInfo()
    {
        echo "Course Name: " . $this->name . "<br>";
        echo "Teacher: " . $this->teacher->getName() . "<br>";
        echo "Price: " . $this->price . "<br>";
        echo "Start Time: " . $this->startTime . "<br>";
        echo "End Time: " . $this->endTime . "<br>";
    }

    public function getName(){
        return 'Tên khóa học: ' . $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}
