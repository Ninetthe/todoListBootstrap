<?php 

class TaskModel{
    private $PDO;
    
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/configuration/Database.php");
        $con = new Database();
        $this->PDO = $con->conexion();
    }
    public function insert($taskname){
        $stament = $this->PDO->prepare("INSERT INTO tasks VALUES(NULL, :taskname)");
        $stament->bindParam(':taskname', $taskname,);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM tasks where id = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM tasks");
        return($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($id, $taskname){
        $stament = $this->PDO->prepare("UPDATE tasks SET taskname = :taskname WHERE id = :id");
        $stament->bindParam(":taskname",$taskname);
        $stament->bindParam(":id",$id); 
        return($stament->execute()) ?  $id : false;
        
    }
    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM tasks WHERE id = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false;
    }

}


?>