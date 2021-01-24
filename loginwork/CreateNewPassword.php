<?php
include '../database.php';
$checking=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
  if(!$checking){
    echo "database is not connected";
  }
    if(isset($_POST['submi'])){
        $pa=$_POST['pass'];
	    $emailid=base64_decode($_GET['emailid']);
        $npa=$_POST['confirm'];
        $q = "update user set password='$npa' where email='$emailid'";
        $link = mysqli_query($_SESSION['connection'],$q);
        if($link)
		    echo	"<script>alert('password change successfully!!');window.location.href='Thoughtbitz-login.php';</script>";
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="../css/CreateNewPassword.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <script type="text/javascript">

var name=0;

       function checkps(){
        name=0;

            var e=document.getElementById("pi");
            var data=f1.pass.value;
            var pat="^.*(?=.{8,})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$";
            var reg=new RegExp(pat);
            passwordcheck();
          if(reg.test(data)){
            name++;
						//alert("g1=1");

            e.style.display="none";

          }
          else{
              name--;
            e.style.display="";
            }
          }
     function checkrps(){
      name=0;

            var e=document.getElementById("rpi");
            var data=f1.confirm.value;
            var pat="^.*(?=.{8,})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$";
            var reg=new RegExp(pat);
            var data1=f1.pass.value;
            passwordcheck();
          if(reg.test(data) && data1==data){
                name++;
				//alert("g2=1");
              e.style.display="none";
          }
          else{
              name--;
            e.style.display="";
            }
    }

    function passwordcheck(){
    var pass1=f1.pass.value;
    var pass2=f1.confirm.value;
    var dc=document.getElementById("any");
    if(!pass1){
        dc.style.color="red";
        dc.style.display="block";
        dc.innerHTML="Enter please Create Password first!!";
    }
    else if(pass1 && pass2){
        if(pass1==pass2){
            var e=document.getElementById("rpi");
            e.style.display="none";
            dc.style.color="green";
            dc.style.display="block";
            dc.innerHTML="password matched successfully";
            var sid = document.getElementById("sid");
            sid.disabled=false;
        }
        else if(pass1!=pass2){
            dc.style.color="red";
            dc.style.display="block";
            dc.innerHTML="passwords could not match !";
            var sid = document.getElementById("sid");
            sid.disabled=true;
        }
    }
}

  </script>
	<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <form name="f1" action="" method = "POST">
      <input onblur="checkps()" type="Password"  class="fadeIn second" name="pass" placeholder="Create new Password"><i class="fa fa-asterisk" style="font-size:10px;color:red" id="pi"></i>
      <input onblur="checkrps()" type="Password"  class="fadeIn second" name="confirm" placeholder="ReEnter Password"><i class="fa fa-asterisk" style="font-size:10px;color:red" id="rpi"></i>
      <div id="any" style="display:none;color:green;"></div>
      <input  onclick="passwordcheck()"  type="submit" class="fadeIn fourth" id="sub" name="submi" value="Submit">
    </form>
   </div>
</div>
</body>

</html>

