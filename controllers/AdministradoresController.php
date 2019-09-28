<?php 
    class AdministradoresController extends Administrador{
        private $security;
            public function __construct(){
                try{
                    $this->security=new Security();
                    $this->security->Validar();
                    $this->security->administrador(2);
                }catch(Exeption $e){
                    die($e->getMessage());
                }
            }
        public function index(){
            require_once('views/administradores/index.php');
        }
    }
?>  