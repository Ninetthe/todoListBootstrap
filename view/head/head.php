<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
        echo (empty($_GET['id']))
        ? ((strpos($_SERVER['REQUEST_URI'], 'create')) ? "Adding new task " : "Index ")
        : ((strpos($_SERVER['REQUEST_URI'], 'show')) ? "Task details ".$_GET['id']  : "Update the task ".$_GET['id'] );
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-dark p-2 mb-3">
        <nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/femcoders/todoList/index.php">TO-DO LIST</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Task
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/femcoders/todoList/view/tasks/index.php">Tasks</a></li>
                                <li><a class="dropdown-item" href="c://xampp/htdocs/femcoders/todoList/view/tasks/create.php">Add new task</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<div class="container-fluid">