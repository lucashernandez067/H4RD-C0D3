<?php 
    class Security extends DB{
        public function validar(){
            if(isset($_SESSION['usuario'])){
                header('location:?c=Login&m=index');
            }
        }
        public function rol($rol){
            if((isset($_SESSION['usuario']))and($_SESSION['usuario']->fk_rol != $rol)){
                if($_SESSION['usuario']->fk_rol == 1){
                    header('location:?c=Administradores&m=index');
                }
                if($_SESSION['usuario']->fk_rol == 1){
                    header('location:?c=Estudiantes&m=index');
                }
            }
        }
    }

?>