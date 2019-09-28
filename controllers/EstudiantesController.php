<?php 
    class EstudiantesController extends Estudiante{
        public function index(){
            require_once('views/estudiantes/index.php');
        }
        public function prueba(){
            require_once('views/estudiantes/prueba.php');
        }
        public function resultado(){
            require_once('views/estudiantes/prueba.php');
        }
        public function puntuacion(){
            $pregunta1=$_POST['pregunta1'];
            $pregunta2=$_POST['pregunta2'];
            $pregunta3=$_POST['pregunta3'];
            $pregunta4=$_POST['pregunta4'];
            $pregunta5=$_POST['pregunta5'];
            $pregunta6=$_POST['pregunta6'];
            $pregunta7=$_POST['pregunta7'];
            $pregunta8=$_POST['pregunta8'];
            $pregunta9=$_POST['pregunta9'];
            $pregunta10=$_POST['pregunta10'];

            $total=$pregunta1+$pregunta2+$pregunta3+$pregunta4+$pregunta5+$pregunta6+$pregunta7+$pregunta8+$pregunta9+$pregunta10;

            if($total>=7){
                header('location:?c=Estudiantes&m=resultado&resultado=1&puntaje='.$total);
            }
            if($total<7){
                header('location:?c=Estudiantes&m=resultado&resultado=2&puntaje='.$total);
            }

        }
    }

?>