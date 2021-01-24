<!DOCTYPE html>
<html>
<head>
	<title>ThoughtBitz Email verification</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<?php 
  
    session_start();
	include 'fun_alert.php';
    include '../database.php';
    include '../mail/mail.php';

		if(isset($_POST['sendmail'])){
			$username=$_POST['username'];
			$password=$_POST['pass'];
			$passconfirm=$_POST['confirm'];
			$email=$_POST['email']; 
			if(!$con){
				echo" connection Unsuccessful";
			}
            
			$checking=mysqli_select_db($con,"epiz_26661878_thoughts");
			$_SESSION['emailid']=$email;
			$_SESSION['username']=$username;
			$_SESSION['passwords']=$password;
			$q=" select * from user where email='$email'";
			$result = mysqli_query($con,$q);
			$num = mysqli_num_rows($result);
            $array=mysqli_fetch_array($result);
			$fcd=rand(100000,999999);
			$_SESSION['privateotp']=$fcd;
           
			
			$mybody= "<div style='margin:auto;width:90%;background:#e3f2fd;;border:5px solid black;color:black;font-weight:bolder;height:100%;font-size:1.5rem;'><img class='img-responsive' src='https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png' alt='Logo' style='width:15%;height:15%;margin-left:43%;margin-top:5rem'/><h3 style='padding-top:20px;text-align:center'><b>dear $username ,your verification code is <br><h1><center>$fcd</center></h1></b></h3></div>";

			
            $subject='activation code for thoughtbitz';
            $mailsendobject=new Thoughtbitzmail;
            
            if($num>=1){
                alerts('account already exists');
                exit();
            }
            else{
                
                $mailsent=$mailsendobject->mailparameters($email,$subject,$mybody);
                $_SESSION["id"]=true;
         
                    header('Location:../loginwork/test.php');

                    exit();
                
            }
	}
	class jsonmagic{
		function  magic(){
			$data = array(
				"username"=>$_SESSION['username'], 
				"email"=>$_SESSION['emailid'],
		 		"password"=>$_SESSION['passwords'],
			  	"otp"=>$_SESSION['privateotp'],
                  "id"=>$_SESSION["id"]
			);
			return json_encode($data);
		}
 	}
	 ?>
</body>
</html>