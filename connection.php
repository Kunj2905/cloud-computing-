<?php


$server = "localhost";
$user = "root";
$password = "";
$databasename = "IPHONE";

$conn = new mysqli($server,$user,$password,$databasename);

if($conn->connect_error){
	die("not connected". $conn->connect_error);
}
 // echo "connection success"

?>