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

    public function eliminar(){
        
        foreach($this->file->consultar($_REQUEST['id']) as $resultado){}
        $url = $resultado->url_imagen;

        $this->file->destroy($_REQUEST['id']);
        unlink($url);
        //header('location:se eliminó');
    }
}

?>