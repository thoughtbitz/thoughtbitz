<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
      <link rel="icon" href="/Blogger/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">

	<?php
	if(isset($_REQUEST['sub']))
	{
		  session_start();
			$link=new mysqli("localhost","root","","blogapi");
  			if(!$link) {
    			echo "database is not connected";
  		}
    $rs=$link->query("select * from user");
		$f=0;
		$emailid=$_REQUEST['email'];
		$_SESSION['id']=$_REQUEST['email'];
		while($row=$rs->fetch_row()){
			if($row[2]==$emailid)
			{
				$f=1;
      require '../Email-verification-master/PHPMailerAutoload.php';
      require '../Email-verification-master/credential.php';
      $mail = new PHPMailer;
      $mail->SMTPDebug =false;                               // Enable verbose debug output
      $mail->do_debug =0;
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAILS;                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure ='tls';     
      $mail->SMTPAutoTLS=false;                       // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to
      $mail->setFrom(EMAILS);
      $mail->addAddress($emailid);     // Add a recipient
      $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )   
      );
      $mail->addReplyTo(EMAILS);
      // print_r($_FILES['file']); exit;
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'From:Worldcommunity...official LPW platform company...Verfication mail';
      $mail->Body    = "<div style='width:100%;background:white;border:10px solid black;color:black;font-weight:bolder;height:100%;font-size:1.5rem'><img class='img-responsive' src='https://i.pinimg.com/474x/08/bc/39/08bc39519604b0be45af76489c3ce441.jpg' alt='Logo' style='width:100%,height:40%'/><h3 style='padding-top:20px;text-align:center'><b>dear password reset link is <a href='localhost/Blogger/loginwork/CreateNewPassword.php?emailid='<?php echo base64_encode($emailid);?>''></a> <br></b></h3></div>";
      $mail->AltBody = 'Thanks';

      if(!$mail->send() ){
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } 
      else {
       echo "<script>console.log('email sent');</script>";
      }
    }
  }
     if($f==0){
    echo  "<script>alert('email  not found in database please enter correct id or sign up!!');window.location.href='./ForgetPasswordBlog.php';</script>";
    //  header("location:ForgetPasswordBlog.php");
    
    
  }
        class jsonmagic{
            function  magic(){
            $marks = array(
           "username"=>$_SESSION['username'], 
          "email"=>$_SESSION['emailid'],
          "password"=>$_SESSION['passwords'],
          "otp"=>$_SESSION['privateotp']
      );
      return json_encode($marks);
      }
    }
  $link->close();
}
else {
	  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/ForgetPasswordBlog.css">
</head>
<body>
  <script type="text/javascript">
   function checkid(){
    var e=document.getElementById("us");
    var data=f1.email.value;
    var pat="^[a-z A-Z 0-9]{4,20}@+[a-z A-z]{2,6}[\.]{1}[c C]{1}[A-Z a-z]{1,6}([\.]{1}[A-Z a-z]{2,6})?$";
    var reg=new RegExp(pat);

  if(reg.test(data)){

e.style.display="none";

  }
  else
    {
    e.style.display="";
    }


}


  </script>
	<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <form name="f1" action="">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIlJrm6SqgKM1OSj-cYbIN5xwvrIUmkS2Pqg&usqp=CAU">
      <h1 style="font-size:1rem">Oops! you forgot password?Not to worry..Here you can reset your password!!</h1>
      <input onblur="checkid()" type="Email"  class="fadeIn second" name="email" placeholder="Enter Registered Email"><i class="fa fa-asterisk" style="font-size:10px;color:red" id="us"></i>
      <input type="submit" class="fadeIn fourth" name="sub" value="Submit">
    </form>
   </div>
</div>

</body>
</html>
<?php
}
 ?>
