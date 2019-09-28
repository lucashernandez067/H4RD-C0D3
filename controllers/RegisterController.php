<?php
date_default_timezone_set("America/Bogota");
    class RegisterController extends Register{
        public function index(){
            require_once('views/Register/index.php');
        }
        public function registrar(){
            $data = array(
                "document_user" => $_POST['document'],
                "password_user" => $_POST['pass'],
                "name_user" => $_POST['name'],
                "lastname_user" => $_POST['last_name'],
                "email_user" => $_POST['email'],
                "date" => $date,
            );
            $this->register->crear($data);
        }
    }
?>