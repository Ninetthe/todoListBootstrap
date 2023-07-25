<?php 
require_once("c://xampp/htdocs/femcoders/todoList/controller/TaskController.php");
$obj = new TaskController();
$obj->update($_POST['id'],$_POST['taskname']);




?>