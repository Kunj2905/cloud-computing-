<?php

$server="localhost";
$username="root";
$password="";
$db_name="shop_management";


$conn=mysqli_connect("localhost","root","","shop_management");

if(! $conn){ print mysql_error(); }


?>