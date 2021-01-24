<?php
	if(session_status()==0){
	session_start();
	}
	$server='sql309.epizy.com';
	$username='epiz_26661878';
	$password='Fzd9KEkfhZNTe';
	$dbname='epiz_26661878_thoughts';
	$con=mysqli_connect("$server", "$username", "$password");
	$_SESSION['connection']=$con;
	if(!$con){
		echo" connection unsuccessful";
	}
?>

