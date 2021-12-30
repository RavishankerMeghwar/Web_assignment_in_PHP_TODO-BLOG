<?php
session_start();
if (isset($_SESSION['todo'])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include_once('navbar.php') ?>
    <?php require_once('Ass_components.php'); ?>
    
    <div class="container text-primary bg-light mt-4">
    <div class="card-header text-white bg-dark">
            View Todo Page <a style="background-color: skyblue; color:black; border: 8px solid currentcolor; " href="todo.php">Click Here->Todo</a>
        </div>
        <?= getTodoDisplay(); ?>
    </div>
    <div class="container  bg-sucess mt-3">
        <div class="card-header text-white bg-dark">
             View Blog Page <a style="background-color: skyblue; color:black; border: 8px solid currentcolor; " href="blog.php"> Click Here->Blog </a>
        </div>
        <?= getPosts(); ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>