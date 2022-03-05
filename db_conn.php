<?php

$sname = "localhost";
$uname = "root";
$password = "root123";

$db_name = "projectDBMS";

$conn = mysqli_connect($sname, $uname, $password, $db_name,"3306");

if(!$conn)
{
	echo "Connection failed!";
}