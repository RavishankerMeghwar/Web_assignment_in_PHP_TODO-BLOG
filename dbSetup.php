<?php

$host = "localhost";
$root = "root";
$root_password = "";

$db = 'web_todo_blog87';
$table = 'blog';


try {
    $dbh = new PDO("mysql:host=$host", $root, $root_password);

    try {
        // check if db exists
        $dbh->exec("CREATE DATABASE $db");
    } catch (PDOException $e) {
        $dbh->exec("DROP DATABASE $db");
        $dbh->exec("CREATE DATABASE $db");
    }

    $dbh->exec("USE $db");
    $dbh->exec("CREATE TABLE $table ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `user` VARCHAR(255) NOT NULL, `body` TEXT NOT NULL , `createdAt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))");

    foreach ($blogPosts as $post) {
        ["title" => $title, "body" => $body, "user" => $user] = $post;
        $dbh->exec("INSERT INTO $table (title, body, user) VALUES ('$title','$body', '$user')");
    }

    echo "<h1>Database configured!</h1>";
} catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}
