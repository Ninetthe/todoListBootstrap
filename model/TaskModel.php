<?php 

class taskModel{
    private $PDO;
    
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/configuration/Database.php");
        $con = new Database();
        $this->PDO = $con->conexion();
    }

    public function insert($nombre){

    }
}


?>