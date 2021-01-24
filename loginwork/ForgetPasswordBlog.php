<?php 
    include '../database.php';
    include '../mail/mail.php';
    $checking=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$checking){
        echo "database is not connected";
    }
    if(isset($_POST['sub'])){
        $email1 = $_POST['email'];
        $q = "select * from user where email = '$email1' ";
        $result = mysqli_query($_SESSION['connection'],$q);
        $num = mysqli_num_rows($result);
        if($num==1){
            $a = '<a href = "https://thoughtbitz.ml/loginwork/CreateNewPassword.php?emailid='.base64_encode($email1).'">Click here</a>';
            $mail1 = new Thoughtbitzmail;
            $sub='Change Password Email';
            $mail1->mailparameters($email1,$sub,$a);
            echo "<script>alert('Kindly check your mail!!');window.location.href = 'ForgetPasswordBlog.php';</script>";
            //header("Location:CreateNewPassword.php?emailid=$email1");
            exit();
        }
        else{
            echo "Email Id does not exist";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./csslogin/ForgetPasswordBlog.css">
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
    <form name="f1" method="post" action="">
      <input onblur="checkid()" type="Email"  class="fadeIn second" name="email" placeholder="Email"><i class="fa fa-asterisk" style="font-size:10px;color:red" id="us"></i>
      <input type="submit" class="fadeIn fourth" name="sub" value="Submit">
    </form>
   </div>
</div>
</body>
</html>