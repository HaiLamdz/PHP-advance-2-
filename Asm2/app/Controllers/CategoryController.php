<?php
    namespace App\Controllers;
    use App\Models\UserModel;
use Nette\PhpGenerator\Dumper;

    class CategoryController extends Controller{

        private $userModel;
        public function __construct(){
            parent::__construct();
            $this->userModel= new UserModel();
        }

        public function add(){
            echo $this->blade->run("categories.add");
        }

        public function addPost(){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $job = $_POST['job'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = $this->userModel->addUser($name, $age, $job, $email, $password);
            header('location: ' . $_ENV['BASE_URL'] . 'user');
        }

        public function index(){
            // echo "day la trang danh muc";
            $data = $this->userModel->getUser();
            // var_dump($data);
            echo $this->blade->run("categories.list", [ "data" => $data]);
        }
        public function show($id){
            $data = $this->userModel->userOfId($id);
            // var_dump($data);
            echo $this->blade->run("categories.update", [ "data" => $data]);
        }

        public function updatePost($id){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $job = $_POST['job'];
            $email = $_POST['email'];
            $data = $this->userModel->updateUser($id, $name, $age, $job, $email);
            header('location: ' . $_ENV['BASE_URL'] . 'user');
        }

        public function delete($id){
            $this->userModel->deleteUser($id);
            header('location: ' . $_ENV['BASE_URL'] . 'user');
        }
    }

?>