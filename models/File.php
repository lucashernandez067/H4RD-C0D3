<?php 

class File extends DB{
    private $file;
    public function insertar($data){
        try{
            $stm = parent::conectar()->prepare('INSERT INTO videos(url_video, type_video, width_video, height_video, size_video, ip_video) VALUES (?,?,?,?,?,?)');
            $stm->bindParam(1,$data['0'],PDO::PARAM_STR);
            $stm->bindParam(2,$data['1'],PDO::PARAM_STR);
            $stm->bindParam(3,$data['2'],PDO::PARAM_STR);
            $stm->bindParam(4,$data['3'],PDO::PARAM_STR);
            $stm->bindParam(5,$data['4'],PDO::PARAM_STR);
            $stm->bindParam(6,$data['5'],PDO::PARAM_STR);
            $stm->execute();
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function find($id){
        try{
            $stm = parent::conectar()->prepare('SELECT * FROM videos WHERE id_video = $id');
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function consultar(){
        try{
            $stm = parent::conectar()->prepare('SELECT * FROM videos');
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function destroy($id){
        try{
            $stm = parent::conectar()->prepare("DELETE FROM videos WHERE id_video = ?");
            $stm->bindParam(1, $id,PDO::PARAM_INT);
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}


?>