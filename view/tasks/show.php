<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/head.php");
require_once("c://xampp/htdocs/femcoders/todoList/controller/TaskController.php");

$obj = new TaskController();
$date = $obj->show($_GET['id']);


?>

<h2 class="text-center">Task registration</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Return</a>
    <a href="edit.php?id=<?= $date[0] ?>" class="btn btn-success">Update</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delet</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to eliminate the task?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Once the task has been deleted, it will not be possible to recover the tasks.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                    <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Delet</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Task number</th>
            <th scope="col">Name Task</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date[0] ?></td>
            <td scope="col"><?= $date[1] ?></td>
        </tr>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/footer.php");
?>