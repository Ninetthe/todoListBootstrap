<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/head.php");
require_once("c://xampp/htdocs/femcoders/todoList/controller/TaskController.php");

$obj = new TaskController();
$task = $obj->show($_GET['id']);

?>

<form action="update.php" method="POST" autocomplete="off">
    <h2>Modifying the task</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?=$task[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">New Task</label>
        <div class="col-sm-10">
            <input type="text" name="taskname" class="form-control" id="inputPassword" value="<?= $task[1]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="update">
        <a href="show.php?id=<?=$task[0]?>" class="btn btn-danger">Cancel</a>
    </div>
</form>

<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/footer.php");
?>