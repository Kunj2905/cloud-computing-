<?php
session_start();
include "connect.php";
include "MENU.php";

session_unset();

session_destroy();

if($_SESSION['username']=="")
{
	header("location:login.php");
}

?>