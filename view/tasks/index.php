<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/head.php");
require_once("c://xampp/htdocs/femcoders/todoList/controller/TaskController.php");
$obj = new TaskController();
$rows = ($obj->index());
?>

<div class="mb-3">
    <a href="c://xampp/htdocs/femcoders/todoList/view/tasks/create.php" class="btn btn-primary">Add new task</a>
</div>
<table class="table">
    <thead>
        <tr>

            <th scope="col">NUMBER</th>
            <th scope="col">TASK NAME</th>
            <th scope="col">ACCIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0] ?>" class="btn btn-primary">See</a>
                        <a href="edit.php?id=<?= $row[0] ?>" class="btn btn-success">Edit</a>
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
                                        <a href="delete.php?ID=<?= $date[0] ?>" class="btn btn-danger">Delet</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="tex-center">No records</td>
            </tr>

        <?php endif ?>

    </tbody>

</table>


<?php
require_once("c://xampp/htdocs/femcoders/todoList/view/head/footer.php");
?>