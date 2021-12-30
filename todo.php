<?php
session_start();
if (!isset($_SESSION['todo'])) {
    $_SESSION['todo'] = (array) null;
}
if (isset($_POST['del'])) {
    array_splice($_SESSION['todo'], $_POST['item'], $_POST['item']);
}

if (isset($_POST['edit'])) {
    array_replace($_SESSION['todo'], $_POST['item'], $_POST['item']);
    
}



if (isset($_POST['addTask'])) {
    $task =  $_POST['task'];
    if (strlen($task) > 0)
        array_push($_SESSION['todo'], $task);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include_once('navbar.php') ?>

    <div class="container">
        <form class="input-group m-3" method="POST">
            <input type="text" class="form-control" name="task" placeholder="Enter Task...">
            <button class="btn btn-outline-secondary" type="submit" name='addTask' id="button-addon2">Add</button>
        </form>

        <?php require_once('Ass_components.php');
        getTodoDisplay();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>