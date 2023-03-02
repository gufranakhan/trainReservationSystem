<?php 
include "signal/conn.php";
session_start();
if(isset($_SESSION['name'])){
	unset($_SESSION['name']);
	session_destroy();
}
header("location:login.php");
?>