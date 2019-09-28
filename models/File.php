<?php 

class File extends DB{
    private $file;
    public function insertar($data){
        try{
            $stm = parent::connect()->prepare('INSERT INTO files(url_file, type_file, size_file, ip_file) VALUES (?,?,?,?)');
            $stm->bindParam(1,$data['0'],PDO::PARAM_STR);
            $stm->bindParam(2,$data['1'],PDO::PARAM_STR);
            $stm->bindParam(3,$data['2'],PDO::PARAM_STR);
            $stm->bindParam(4,$data['3'],PDO::PARAM_STR);
            $stm->execute();
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function find($id){
        try{
            $stm = parent::connect()->prepare('SELECT * FROM files WHERE id_file = $id');
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function consultar(){
        try{
            $stm = parent::connect()->prepare('SELECT * FROM files');
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function destroy($id){
        try{
            $stm = parent::connect()->prepare("DELETE FROM files WHERE id_file = ?");
            $stm->bindParam(1, $id,PDO::PARAM_INT);
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}


?>