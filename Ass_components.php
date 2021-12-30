<?php
function getTodoDisplay()
{
?>
    <?php if (isset($_SESSION['todo'])) : ?>
        <?php if (count($_SESSION['todo']) > 0) : ?>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope="col"> Serial No</th>
                        <th scope="col">NAME</th>
                        <th scope="col">UPDATE</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['todo'] as $key => $task) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $task ?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="text" name="item" value="<?= $key ?>" hidden>
                                   
                                    <button class="btn btn-success" name='edit' type="submit">Update</button>
                                </form>
                            </td>

                            <td>
                                <form action="" method="post">
                                    <input type="text" name="item" value="<?= $key ?>" hidden>
                                   
                                    <button class="btn btn-danger" name='del' type="submit">Delete</button>
                                </form>
                           </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    <?php endif ?>
<?php
}


function getPosts()
{
?>
    <?php
    require_once('dbconnection.php');
    $conn = getConnection();
    $posts = $conn->query("SELECT * FROM " . TABLE);
    foreach ($posts as $key => $post):
    ?>
        <div class="jumbotron jumbotron-fluid bg-light border border-warning m-2">
            <div class="container">
                <h1 class="display-4">P.No<?= $key + 1 ?>. <?= $post['title'] ?></h1>
                <div class="small float-right">POST_BY : <?= $post['user'] ?></div>
                <div class="small float-right">POSTED_TIME : <?= $post['createdAt'] ?></div>
                <hr>
                <p class="lead"><?= $post['body'] ?></p>
            </div>
        </div>
    <?php
    endforeach
    ?>
<?php

}
