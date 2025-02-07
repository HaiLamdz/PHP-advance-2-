<?php
class Account
{
    protected $name;
    protected $email;
    protected $password;
    protected $role;
    // đăng Ký
    protected function validateRole($role) {
        $allowedRoles = ['student', 'teacher', 'admin'];
        return in_array($role, $allowedRoles);
    }
    public function __construct($name, $email, $password, $role = "student")
    {
        //validate
        if (strlen($name) > 7) {
            $this->name = $name;
        } else {
            echo "Tên Ít nhất 8 ký tự";
            die();
        }
        $testMail = '/^\\S+@\\S+\\.\\S+$/';
        if (preg_match($testMail, $email)) {
            $this->email = $email;
        } else {
            echo "Email không hợp lệ";
            die();
        }
        if (strlen($password) < 8) {
            echo "Mật khẩu phải từ 8 ký tự trở lên";
            die();
        } else {
            $this->password = $password;
        }
        if (!$this->validateRole($role)) {
            echo "Quyền hạn không hợp lệ.";
            die();
        }else{
            $this->role = $role;
        }
        
    }


    public function login($email, $password)
    {
        if ($this->email == $email && $this->password == $password) {
            return true;
        } else {
            return false;
        }
    }

    public function updateAccount($param)
    {
        if (isset($param['password'])) {
            // validate
            if (strlen($param['password']) < 8) {
                echo "Mật khẩu phải từ 8 ký tự trở lên";
                die();
            } else {
                $this->password = $param['password'];
            }
        }
        if (isset($param['role'])) {
            // validate
            if (!$this->validateRole($param['role'])) {
                echo "Quyền hạn không hợp lệ.";
                die();
            }else{
                $this->role = $param['role'];
            }
        }
        if (isset($param['name'])) {
            // validate
            if (strlen($param['name']) < 8) {
                echo "Tên Ít nhất 8 ký tự";
                die();
            } else {
                $this->name = $param['name'];
            }
        }
    }

    public function getInfo()
    {
        echo "Name: " . $this->name ."- Email: " . $this->email . "- Role: " . $this->role;
    }

    public function getName(){
        return $this->name;
    }
}
