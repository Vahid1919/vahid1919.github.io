<?php


DEFINE('DB_USER', 'user_base');
DEFINE("DB_PASSWORD", "eof,p2020#");


$dsn = "mysql:host=localhost;dbname=widmo";

try{
    $db = new PDO ($dsn, DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    $err_msg = $e->getMessage();
    include('db_error.php');
    exit();
}

?>