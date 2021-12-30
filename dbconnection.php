<?php

define("HOST", "localhost");
define("ROOT", "root");
define("ROOT_PASSWORD", "");

define("DB", 'web_todo_blog87');
define("TABLE", 'blog');


function getConnection()
{
    $dbh = new PDO("mysql:host=localhost;", "root", "");
    $dbh->exec("USE " . DB);

    return $dbh;
}
