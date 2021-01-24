<?php
	function alert($msg){
		echo "<script>alert('$msg');document.location = '../loginwork/signupblog.php';</script>";
	}
	function alerts($msg){
		echo "<script>alert('$msg');document.location = '../loginwork/signup.php';</script>";
	}
	function alertforlogout($msg){
		echo "<script>alert('$msg');document.location = '../';</script>";
	}
  ?>