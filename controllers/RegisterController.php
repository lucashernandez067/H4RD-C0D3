<?php 
    class RegisterController extends Register{
<<<<<<< HEAD
=======
        private $register;
        public function __construct(){
            try{
                $this->register = new Register();
            }catch(Exception $e){
                die($e->getMessage());
            };
        }
>>>>>>> a048449ab1dfb3234b8252a205636e0f93cc5e8b
        public function index(){
            require_once('views/Register/index.php');
        }
        public function registrar(){
            $data = array(
                "document_user" => $_POST['document'],
                "password_user" => $_POST['pass'],
                "name_user" => $_POST['name'],
                "lastname_user" => $_POST['last_name'],
                "email_user" => $_POST['email']
            );
            $this->register->crear($data);
        }
    }
?>