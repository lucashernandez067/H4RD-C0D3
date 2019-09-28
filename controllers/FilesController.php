<?php 

class filesController extends File{
    private $file;
    public function __construct(){
        try{
            $this->file = new File();
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function index(){
        require_once('views/files/index.php');
    }
    public function cargar(){
        $destino="assets/files/";
        $name = basename($_FILES['file']['name']);
        $tmp_name = $_FILES['file']['tmp_name'];
        $type = $_FILES['file']['type'];
        $size = $_FILES['file']['size'];
        $ip = $_SERVER['SERVER_ADDR'];
        
        $ruta_final = $destino.''.$name;
        move_uploaded_file($tmp_name,$ruta_final);
        $array=array(
            $ruta_final,
            $type,
            $size,
            $ip
        );

        parent::insertar($array);
        header('location:?c=Files&m=index');           
    }

    public function eliminar(){
        
        foreach($this->file->consultar($_REQUEST['id']) as $resultado){}
        $url = $resultado->url_video;

        $this->file->destroy($_REQUEST['id']);
        unlink($url);
        //header('location:se eliminó');
    }
}

?>