<?php
	require_once('config.php');
	class API{
		function rdb1(){
			$db=new Connect;
			$db->__construct();
			$users=array();
			$data=$db->prepare('select * from blogdb');
			$data->execute();
			while($outputdata=$data->fetch(PDO::FETCH_ASSOC)){
				$users[$outputdata['blog_id']]=array(
						'blog_id'  =>$outputdata['blog_id'],
						'blog_text' =>$outputdata['blog_text'],
						'blog_title'  =>$outputdata['blog_title'],
						'profile_id'  =>$outputdata['profile_id'],
						'img_name'  =>$outputdata['img_name'],
						//'blog_img'  =>$outputdata['blog_img']
				);
			}
			return json_encode($users);
		}
		
		function rdb2(){
			$db=new Connect;
			$db->__construct();
			$users=array();
			$data=$db->prepare('select * from profiledb');
			$data->execute();
			while($outputdata=$data->fetch(PDO::FETCH_ASSOC)){
				$users[$outputdata['user_id']]=array(
						'userid'  =>$outputdata['user_id'],
						'username' =>$outputdata['user_name'],
						'emailid'  =>$outputdata['email_id'],
						'psw'  =>$outputdata['password'],
						'designation'  =>$outputdata['designation'],
						'bio' =>$outputdata['bio'],
						//'imgname' =>$outputdata['img_name']
				);
			}
			return json_encode($users);
		}
		
		function idb1($blog_text,$blog_title,$profile_id,$img_name){
			$con=mysqli_connect("localhost","root");
			if(!$con){
				echo" connection unsuccessful";
			}
			mysqli_select_db($con,'mysql');
			$q = "insert into blogdb(blog_text,blog_title,profile_id,img_name) values('$blog_text','$blog_title','$profile_id','$img_name')";
			mysqli_query($con,$q);
		}
		
		function idb2($username,$emailid,$password,$bio,$designation,$imgname){
			$con=mysqli_connect("localhost","root");
			if(!$con){
				echo" connection unsuccessful";
			}
			mysqli_select_db($con,'mysql');
			$q = "insert into profiledb(user_name,email_id,password,bio,designation,img_name) values('$username','$emailid','$password','$bio','$designation','$imgname')";
			mysqli_query($con,$q);
		}
		
		function ddb1($blog_id){
			$con=mysqli_connect("localhost","root");
			if(!$con){
				echo" connection unsuccessful";
			}
			mysqli_select_db($con,'mysql');
			$q = "delete from blogdb where blog_id = '$blog_id'";
			mysqli_query($con,$q);
		}
		
		function udb1($blogid,$profileid,$blogtitle,$blogtext){
			$con=mysqli_connect("localhost","root");
			if(!$con){
				echo" connection unsuccessful";
			}
			mysqli_select_db($con,'mysql');
			$q = "update blogdb set blog_text = '$blogtext', blog_title = '$blogtitle' where blog_id = '$blogid' and profile_id = '$profileid'";
			mysqli_query($con,$q);
		}
		
		function udb2($profileid,$bio,$designation){
			$con=mysqli_connect("localhost","root");
			if(!$con){
				echo" connection unsuccessful";
			}
			mysqli_select_db($con,'mysql');
			$q = "update profiledb set bio = '$bio', designation = '$designation'  where user_id = '$profileid'";
			mysqli_query($con,$q);
		}
	}
	$API=new API;
	header('content-type:application/json');
?>