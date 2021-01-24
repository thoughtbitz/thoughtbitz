<?php
include '../database.php';
include '../Email-Verification-master/fun_alert.php';
include '../API/start.php';
mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
if(isset($_POST['login-btn'])){
  $email=$_POST['emailid'];
  $password=$_POST['psw'];
  $q=" select * from user where email ='$email' and password='$password'";
  $result = mysqli_query($_SESSION['connection'],$q);
  $num = mysqli_num_rows($result);
  $arrayobj=mysqli_fetch_array($result);
  

  //$GLOBALS['a'] =$arrayobj[0];
  //echo $a;
  if($num<1){
    echo '<script>alert("Oops!Email or Password incorrect!!");window.location.href="./Thoughtbitz-login.php";</script>';
  }
  else{
    $number=1;
    $queryforlogin="update user set login_activity=$number where userid=$arrayobj[0]";
    $resulting=mysqli_query($con,$queryforlogin);
    setcookie('userid', $arrayobj['userid'],time() + (86400 *7), "/"); 
    $encryptsecure=urlencode(base64_encode("dashboard".$arrayobj[0]));
    header("Location:../dashboard");
    exit();
  }
}
elseif (isset($_GET['event'])){
    $number=0;
    $userid1=$_COOKIE['userid'];
    $obj=new check;
    $x=$obj->check_login($userid1,$_SESSION['connection']);
    $queryforlogin="update user set login_activity=$number where userid='$userid1'";
    $resulting=mysqli_query($_SESSION['connection'],$queryforlogin);
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-(86400*7));
        setcookie($name, '', time()-(86400*7), '/');
    }
  alertforlogout("you have been loggedout successfully");
  session_commit();
}
?>