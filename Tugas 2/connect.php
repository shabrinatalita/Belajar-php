<?php

define("HOST",'localhost'); //namahost
define("user",'admin');     //nama user
define('password', 'RILqM8jmGv20hbfx'); //pasworduser
define('db', 'db_user_demo_php'); //nama database

$con = mysqli_connect(HOST,user,password,db);

if(!$con){
    print ("gagal terhubung ke database");
}

?>