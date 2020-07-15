<?php
session_start();
if(isset($_SESSION["uname"])){
	//echo("this is working");
	header('location:subjectable.php');
	exit();
}
else{
	//echo("this is not working");
	header('location:login.html');
}
	
?>