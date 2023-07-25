<?php 
class TaskController{
    private $model;
    
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/model/TaskModel.php");
        $this->model = new TaskModel();
    }
    public function save($taskname, $taskdescription, $taskstates, $taskdates) {
        $id = $this->model->insert($taskname, $taskdescription, $taskstates, $taskdates);
        return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }

}



?>