<?php
    class MateriasController extends Materia{
        public function matematicas(){
            require_once('views/materias/matematicas.php');
        }
        public function spanish(){
            require_once('views/materias/spanish.php');
        }
        public function sociales(){
            require_once('views/materias/sociales.php');
        }
        public function ingles(){
            require_once('views/materias/ingles.php');
        }
        public function quimica(){
            require_once('views/materias/quimica.php');
        }
        public function fisica(){
            require_once('views/materias/fisica.php');
        }
        public function etica(){
            require_once('views/materias/etica.php');
        }
        public function religion(){
            require_once('views/materias/religion.php');
        }
    }
?>