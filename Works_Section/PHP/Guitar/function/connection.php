<?php

$host = "localhost";
$user = "root";
$password = '';
$db_name = "guitar";

$con = mysqli_connect($host, $user, $password, $db_name);

if(mysqli_connect_errno()){
   die("Failed to conenct with MySQL: ".mysqli_connect_error());
}

?>