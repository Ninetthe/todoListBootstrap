<?php 
class TaskController{
    private $model;
    
    public function __construct()
    {
        require_once("c://xampp/htdocs/femcoders/todoList/model/TaskModel.php");
        $this->model = new TaskModel();
    }
    public function save($taskname) {
        $id = $this->model->insert($taskname);
        return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }

    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id): header("Location:index.php");
    }
    public function index(){
        return($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $taskname) {
        return($this->model->update($id, $taskname)) != false ? header("Location:show.php?id=".$id) : header("Location:index.php");
    }
}

?>