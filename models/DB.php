<?php 
class DB{
    public function connect(){
        try{
            $PDO = new PDO("mysql:host=localhost;dbname=database_hackatrix","root","");
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        }

        catch(Exception $error){
            die("Error foun in file models/database.php".$error->getMessage());
        }
    }
}
?>