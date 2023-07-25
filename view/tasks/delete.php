<?php
require_once("c://xampp/htdocs/femcoders/todoList/controller/TaskController.php");
$obj = new TaskController();
$obj->delete($_GET['id']);



?>