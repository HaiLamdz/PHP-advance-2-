<?php
    namespace App\Controllers;
    use App\Models\UserModel;
use Nette\PhpGenerator\Dumper;

    class UserController extends Controller{

        private $userModel;
        public function __construct(){
            parent::__construct();
            $this->userModel= new UserModel();
        }

        public function add(){
            echo $this->blade->run("users.add");
        }

        public function addPost(){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $job = $_POST['job'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $avata = $_FILES['avata'];
            $data = $this->userModel->addUser($name, $age, $job, $email, $password, $avata);
            header('location: ' . $_ENV['BASE_URL'] . 'user');
        }

        public function index(){
            $data = $this->userModel->getUser();
            // var_dump($data);
            echo $this->blade->run("users.list", ["data" => $data]);
        }
        public function show($id){
            $data = $this->userModel->userOfId($id);
            // var_dump($data);
            echo $this->blade->run("users.update", [ "data" => $data]);
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