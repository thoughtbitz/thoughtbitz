<?php
	if(session_status()==0){
	session_start();
	}
	$server='';
	$username='';
	$password='';
	$dbname='';
	$con=mysqli_connect("$server", "$username", "$password");
	$_SESSION['connection']=$con;
	if(!$con){
		echo" connection unsuccessful";
	}
?>

