<?php 

class TaskModel{
    private $PDO;
    
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/configuration/Database.php");
        $con = new Database();
        $this->PDO = $con->conexion();
    }

    public function insert($taskname, $taskdescription, $taskstates, $taskdates){
        $stament = $this->PDO->prepare("INSERT INTO tasks(taskname, taskdescription, taskstates, taskdates) VALUES(?, ?, ?, ?)");
        $stament->bindParam(":taskname",$taskname);
        $stament->bindParam(":taskdescription",$taskdescription);
        $stament->bindParam(":taskstates",$taskstates);
        $stament->bindParam(":taskdates",$taskdates);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
}


?>