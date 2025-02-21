<?php
    namespace App\Controllers;
    use App\Models\UserModel;
    use Rakit\Validation\Validator;

    class UserController extends Controller{
        private $userModel;
        public function __construct(){
            parent::__construct();
            $this->userModel= new UserModel();
        }
        public function index(){
            $data = $this->userModel->getAll();
            // var_dump($data);
            echo $this->blade->run("lisr_user", [
                "data" => $data
            ]);
            // require_once 'views/lisr_user.php';
        }

        public function insert(){
           
            require_once 'views/add_user.php';
        }

        public function insertPost(){
            // validate 
            $validator = new Validator();
           $validation = $validator->make([
            'name' =>$_POST['name'],
            'age' => $_POST['age'],
            'image' => $_FILES['image']
           ],[
            'name' => 'required|min:1|max:50',
            'age' => 'required|integer|min:18|max:100',
            'image' => 'uploaded_file:0,2M,png,jpg,jpeg'
           ]);
            $validation->validate();
            $data = $validation->getValidData(); 
            if($validation->fails()){
                $_SESSION['errors'] = $validation->errors()->firstOfAll();
                // header('Location: ' . $_ENV['BASE_URL'] . 'user');
                exit();
            }
            $file = $_FILES['image'];
            $imageLink = null;
            if($file['name'] != ""){
                $fileName = time() . '_' .$file['name'];
                move_uploaded_file($file['tmp_name'], "uploads/$fileName");
                $imageLink = "uploads/$fileName";
            }
            $data = $this->userModel->insertUser($data['name'], $data['age'], $imageLink);
            header('Location: ' . $_ENV['BASE_URL'] . 'user');
        }

        public function update($id){
            // $id = $_GET['id'];
            // var_dump($id);die;
            $data = $this->userModel->userOfId($id);
            echo $this->blade->run("update_user", [
                "data" => $data
            ]);
        }

        public function updatePost($id){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $file = $_FILES['image'];
            $user = $this->userModel->userOfId($id);
            $imageLink = $user['image'];
            // var_dump($imageLink, $_POST);die;
            if($file['name'] != ""){
                unlink($imageLink);  // xoa anh cu
                $fileName = time() . '_' .$file['name'];
                move_uploaded_file($file['tmp_name'], "uploads/$fileName");
                $imageLink = "uploads/$fileName";
            }
            $data = $this->userModel->updateUser($id, $name, $age, $imageLink);
            header('Location: ' . $_ENV['BASE_URL'] . 'user');
        }

        public function delete($id){
            $this->userModel->delete($id);
            header('Location: '. $_ENV['BASE_URL']. 'user');
        }
    }
?>