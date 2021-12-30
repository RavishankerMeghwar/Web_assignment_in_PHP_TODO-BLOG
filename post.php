<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
if (isset($_POST['Post'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $user = $_SESSION['user']['name'];

    require_once('dbconnection.php');

    $conn = getConnection();

    $conn->query("INSERT INTO blog (title, body, user) VALUES ('$title', '$body', '$user')");

    header("Location: blog.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include_once('navbar.php') ?>
    <div class="container bg-light">
        <form action="" method="post" class="mt-5">
            <div>
                <label>POST_TITLE</label>
                <input class="form-control" type="text" name="title" required>
            </div>
            <div>
                <label>POST_DESCRIPTION</label>
                <textarea class="form-control" name='body' rows="3" required></textarea>
            </div>
            <input type="submit" class="form-control m-1 btn btn-primary" name="Post">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>