<?php 

class Database{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "todolist";
    
    public function conexion(){
        try{
            $PDO = new PDO("mysql:host=".$this->server.";dbname=".$this->database, $this->username, $this->password);
            return $PDO;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    
    
}

$obj = new Database();
print_r($obj->conexion());


?>