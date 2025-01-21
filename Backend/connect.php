<?php

header("Content-type:text/html; charset=utf-8");

define('db_hostname', 'localhost');
define('db_username', 'root');
define('db_password', '');
define('db_name', 'csokik');

$con = mysqli_connect(db_hostname, db_username, db_password, db_name);

if (!$con){
    die('connection failed: ' . mysqli_connect_error());
}

echo 'connected successfully';

mysqli_set_charset($con,'utf8');

?>