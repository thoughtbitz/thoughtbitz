<?php

require_once('../Email-Verification-master/index.php');
if($_SESSION["id"]==false){
 header("Location:./Thoughtbitz-login");
 exit();
}

?>
<html>
<head>
	<title>Enter OTP</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../b/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../b/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    	/* *{
    		margin:0;
    		padding:0;
    	}
    	.otp{
    		box-shadow:0px 0px 10px rgba(0,0,0,0.4);
    	}
        @media(!max-width:500px){ 
            img{
                height:100px;
            }
        } */
        body{
    margin: 0;
    padding: 0;
    height: 100vh;
background: #000000;  
background: -webkit-linear-gradient(to right, #434343, #000000);  
background: linear-gradient(to right, #434343, #000000); 
}

.container{
    display: flex;
    flex-flow: column;
    height: 100%;
    align-items: space-around;
    justify-content: center;
}

.userInput{
    display: flex;
    justify-content: center;
    text-align:center;
}

input{
    margin: 10px;
    height: 35px;
    width:20px;
    border: none;
    border-radius: 5px;
    text-align: center;
    font-family: arimo;
    font-size: 1.2rem;
    background: #eef2f3;

}

h1{
    text-align: center;
    font-family: arimo;
    color: honeydew;
}
form{
    text-align:center;
}

button{
    width: 150px;
    height: 40px;
   
    font-family: arimo;
    font-size: 1.1rem;
    text-align:center;
    border: none;
    border-radius: 5px;
    letter-spacing: 2px;
    cursor: pointer;
    background: #616161;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #9bc5c3, #616161); 
background: linear-gradient(to right, #9bc5c3, #616161); 
}


    </style>
</head>
<body>
	
    <div class="container">
        <h1>Please Check Your Mail</h1>
        <h1>ENTER OTP</h1>
        <form action="" method="POST" autocomplete="off">
        <div class="userInput">
            <input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')" name="n1">
            <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')" name="n2">
            <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')" name="n3">
            <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')" name="n4">
            <input type="text" id="fifth" maxlength="1" onkeyup="clickEvent(this,'six')" name="n5">
            <input type="text" id="six" maxlength="1"  name="n6">
        </div>
        <div >Time left :<span id="timer" class="text-white"></span></div>
        <button type="submit" name="confirm">CONFIRM</button>
    </form>
    </div>
</body>
<script type="text/javascript">

	let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  remaining -= 1;
  
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    // Do validate stuff here
    return;
  }
  else{
  // Do timeout stuff here
  alert('oops ..!!timeout try again....');
 window.location.href ="./signup.php";
	}
}
timer(90);
function clickEvent(first,last){
            if(first.value.length){
                document.getElementById(last).focus();
            }
        }
</script>
</html>
<?php
    include '../database.php';
	
    $objectalert=new fghjk;
					if(!$con){
						echo" connection Unsuccessful";
					}
					mysqli_select_db($con,'epiz_26661878_thoughts');
					$extractjson=new jsonmagic;
					$jsonobject=$extractjson->magic();
					$a = json_decode($jsonobject,true);
					if(isset($_POST['confirm'])){
						$enteredotp=$_POST['n1'].$_POST['n2'].$_POST['n3'].$_POST['n4'].$_POST['n5'].$_POST['n6'];
						$dfg=(int)$enteredotp;
						$generatedotp=$a['otp'];
                       $myid=$a["id"];
						$getmail=$a['email'];
						$passwords=$a['password'];
						$validateuser=$a['username'];
						if($dfg==$generatedotp){
							if($getmail==""){
								$qy="insert into user(username,email,password,emailverified,login_activity,is_admin)values('$validateuser','$getmail','$passwords',1,1,1) ";
                                $_SESSION["id"]=false;
								$result=mysqli_query($con,$qy);

                                session_destroy();
                                	echo '<script>
                                alert("You are registered as admin");
                                setTimeout(function(){
                                    
                                window.location.href="https://www.thoughtbitz.ml/loginwork/Thoughtbitz-login";},70);</script>';
								
                                
                                exit();
							}
							else{
								$qy="insert into user(username,email,password,emailverified,login_activity,is_admin)values('$validateuser','$getmail','$passwords',1,1,0) ";
                                $_SESSION["id"]=false;
								$result=mysqli_query($con,$qy);
                                // $queryextraforid2="select * from user where email='$email' and username='$validateuser'";
                                // $result2=mysqli_query($con,$queryextraforid2);
                                // $arraytype2=mysqli_fetch_array($result2);
                                // $userids2=$arraytype2[0];
                                // $encoded2=urlencode(base64_encode("dashboard".$userids2));
                                session_destroy();
                                
								echo '<script>
                                alert("welcome to ThoughtBitz...");
                                setTimeout(function(){
                                    
                                window.location.href="https://www.thoughtbitz.ml/loginwork/Thoughtbitz-login";},70);</script>';
								exit();
                                
                                
							}
						}
                        else{
                            header('Location:signup.php');
                            exit();
                        }
				}
?>
