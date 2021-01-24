<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link href="jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="jquery.fireworks.js"></script>
<script>
$(document).ready(function(){
  $("#javabtn").click("on",function(){
    var getcontent=document.getElementById("javasuccess");
    
    getcontent.style.display="block";
    setTimeout(function(){
            window.location.href="https://www.thoughtbitz.ml/course/java_card_structure.php";
    },3000);  
  });
   $("#cppbtn").click("on",function(){
    var getcontent=document.getElementById("cppsuccess");
    
    getcontent.style.display="block";
    setTimeout(function(){
            window.location.href="https://www.thoughtbitz.ml/course/cpp_card_structure.php";
    },3000);
});
    $("#cbtn").click("on",function(){
    var getcontent=document.getElementById("csuccess");
    
    getcontent.style.display="block";
    setTimeout(function(){
            window.location.href="https://www.thoughtbitz.ml/course/c_card_structure.php";
    },3000);
});
$("#imgs").fireworks();
setTimeout(function(){
        $("#imgs").attr("id","dmdh");
    },5000);
});

</script>
  <style type="text/css">
    .navbar-brand{
      display:flex;
      justify-content:space-around;
    }
    .navbar-brands{
      display:flex;
      justify-content:space-around;
    }
    .logo-mark{
      color:white;
      font-family: 'Lobster', cursive;
      padding:0.3rem 1rem;
      font-size:1.8rem;
      box-shadow:0 0  rgba(0,0,0,0.4);
    }
    .logo{
      border-radius:50%;
      height:50px;
      margin-bottom:0.5rem;
      box-shadow:0 0 10px rgba(0,0,0,0.4);
    }
    .navb:hover {
        cursor: pointer;
  
}

.card{
  box-shadow:0 0 10px rgba(0,0,0,.4), 0 4px 8px rgba(0,0,0,.6);
  /* background-image:url('https://img.freepik.com/free-vector/gradient-geometric-shape-background_78532-374.jpg?size=626&ext=jpg'); */

  font-family: 'Oswald', sans-serif;
}
.card:hover{
     transform: scale(1.20);
     box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
.card-footer{
    color:white;
}

.h1{
  background-color:#F0FFFF;
  font-family: 'Oswald', sans-serif;
  
  
}
.container{
  background-color:#F0FFFF;
  width:100%;
}
.card-title{
    color:white;
}
.card-text{
    color:yellow;
}
::-webkit-scrollbar {
  width: 15px;
}
::-webkit-scrollbar-track {
  background:orange; 
}

::-webkit-scrollbar-thumb {
  background: #555; 
  border-radius:10px;
}

::-webkit-scrollbar-thumb:hover {
  background:cyan; 
}
//coming soon
@-webkit-keyframes mask-move {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(320px);
            transform: translateX(320px);
  }
}
@keyframes mask-move {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(320px);
            transform: translateX(320px);
  }
}
@-webkit-keyframes mask-inner-move {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(-320px);
            transform: translateX(-320px);
  }
}
@keyframes mask-inner-move {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(-320px);
            transform: translateX(-320px);
  }
}
*,
*:before,
*:after {
  box-sizing: border-box;
}

body,
html {
  height: 100%;
}

csbody {
  padding:0px;
  margin: 0;
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
    justify-content: space-around;
  -webkit-box-align: center;
    align-items: center;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
}

.focus {
  font-size: 3rem;
  text-transform: uppercase;
  color: white;
  letter-spacing: .2rem;
  
  position: relative;
  width: 500px;
}
.focus:before {
  content: 'Coming Soon';
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.focus:after {
  content: '';
  position: absolute;
  width: 50px;
  height: calc(100% + 8px);
  top: -4px;
  left: 0;
  border-top: 2px solid;
  border-bottom: 2px solid;
  -webkit-animation: mask-move 2s linear infinite alternate;
          animation: mask-move 2s linear infinite alternate;
}
.focus--mask {
  
  position: absolute;
  width: 50px;
  height: 100%;
  top: 0;
  left: 0;
  background:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7EQscJzWrKO2El52V96YXjVkGfkda6MuLCA&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;
  -webkit-animation: mask-move 2s linear infinite alternate;
          animation: mask-move 2s linear infinite alternate;
}
.focus--mask-inner {
	width:500px;
  -webkit-animation: mask-inner-move 2s linear infinite alternate;
          animation: mask-inner-move 2s linear infinite alternate;
}

.credits {
  color: white;
  position: absolute;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  font-weight: 200;
  letter-spacing: 0.05rem;
  font-style: italic;
  text-align: center;
}
.credits a {
  color: white;
  text-decoration: none;
  font-weight: normal;
}
.credits a:hover {
  text-decoration: underline;
}

</style>
  <?php
  include '../API/start.php';
  include '../database.php';
  //$myid=$_GET['course'];
  //$decoded=base64_decode(urldecode($myid));
  //ini_set('display_errors',1);
  //$userid=trim($decoded,"course");
  $userid = $_COOKIE['userid'];
  $cvb=new check;
  $check=1;
  $fgh=$cvb->check_login($userid,$_SESSION['connection']);
  if($fgh!=1){
        $check=0;
        header('Location:../loginwork/Thoughtbitz-login.php');
        exit();
  }
  else{
    echo "<script>if(!!window.performance && window.performance.navigation.type===2){
      console.log('Reloading');
      window.location.reload();
    }</script>";
  }
  mysqli_select_db($_SESSION['coonection'],'epiz_26661878_thoughts');
  $q="select * from c_course where uid='$userid'";
  $result = mysqli_query($_SESSION['connection'],$q);
  $num=mysqli_num_rows($result);
  $q1="select * from user where userid='$userid'";
  $result1 = mysqli_query($_SESSION['connection'],$q1);
  $arrayobj=mysqli_fetch_array($result1);
  ?>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar navbar-dark sticky-top bg-dark justify-content-between">
            <a class="navbar-brand" href="#"><div><img class="logo img-fluid" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-5 mx-5 apply">
                <li class="nav-item navs active px-5">
                <a class="nav-link navb text-white" href="../dashboard?userid=<?php echo urlencode(base64_encode("dashboard".$userid."viewposts"));?>" style="margin-top:10px">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white " href="mycourse.php" style="margin-top:10px">My Course </a>
                </li>
                <?php
                echo '
                <li class="nav-item">
     <a class="nav-link " href="../user/'.substr($arrayobj['email'],0,strpos($arrayobj['email'],'@')).'" style="color:white;box-sizing:border-box;border-radius:15px;text-transform:capitalize">';
                ?>
         
        <?php 
        if(!empty($arrayobj['profileimage'])){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($arrayobj['profileimage'] ).'" alt="Admin" class="rounded-circle" width="50" height="50">';
        }
        else{
           echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjwvStWy9p8lfKQynnVowpVnbP7iQ_gTfo4w&usqp=CAU" circle="rounded-circle" width="50" height="50">'; 
        } 
            ?>
         &nbsp&nbsp<?php echo $arrayobj['username'];?>
        </a>
      </li>
            
        </ul>
    </div>
        </nav>
<nav>

<div class="container-fluid">
<div id="imgs" style="z-index:200;height:400px; background:url('https://www.thoughtbitz.ml/img/coursefire.png');background-size:cover;">

</div>
        
        <div class="container-fluid" style="background:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7EQscJzWrKO2El52V96YXjVkGfkda6MuLCA&usqp=CAU');background-repeat:no-repeat;background-size:cover">
        
                <div class="h1 text-center mt-5 text-white bg-dark">Courses</div>
                <div class="card-deck">
        <div class="card m-5 text-center">
            
            <div class="card-body" >
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJvS0693tvoUkW11Ze2caPYRTxcL46Qd2a0Q&usqp=CAU" class="card-img" height="200">
            <p class="card-text text-dark">Java programming</p>
            
            </div>
            <div class="card-footer">
            <?php
                $q="select * from c_course where uid='$userid' and lid = 1";
                $result = mysqli_query($_SESSION['connection'],$q);
                $num=mysqli_num_rows($result);  
                $row = mysqli_fetch_array($result);            
                if($num==0){                        echo '<a href="java_card_structure.php" class="btn btn-primary" data-toggle="modal" data-target="#javamodal">check now</a><br>';
                    echo '<small class="card-text">unlock</small>';
                }
                else{
                    echo '<a href="java_card_structure.php?lid='.urlencode(base64_encode("dashboard".'1'."viewposts")).'" class="btn btn-primary m-1">Continue</a>';
                    $width=($row['percentage']/15)*100;
                    echo '<div class="progress">
                            <div class="progress-bar progress-bar-success bg-success progress-bar-striped progress-bar-animated" role="progressbar"                                                   aria-valuenow="'.$width.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$width.'%;padding-left:20px;color:black">
                                 '.$width.'% Complete 
                            </div>
                             
                        </div>'; 
                }
            ?>

            </div>

        </div>
        <div class="card m-5 text-center">
            
            <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFVxYWAbhKuuQwKHpX8bEUGDROhR2j6jvGDg&usqp=CAU" height="200" class="card-img">
            <p class="card-text text-dark">C Programming</p>
            </div>
            <div class="card-footer">
                <?php
                $q="select * from c_course where uid='$userid' and lid = 2";
                $result = mysqli_query($_SESSION['connection'],$q);
                $num=mysqli_num_rows($result);  
                $row = mysqli_fetch_array($result);            
                if($num==0){
                        echo '<a href="c_card_structure.php" class="btn btn-primary" data-toggle="modal" data-target="#cmodal">check now</a><br>';
                    echo '<small class="card-text text-dark">unlock</small>';
                }
                else{
                    echo '<a href="c_card_structure.php" class="btn btn-primary m-1">Continue</a>';
                    $width=($row['percentage']/16)*100;
                    echo '<div class="progress">
                            <div class="progress-bar progress-bar-success bg-success progress-bar-striped progress-bar-animated" role="progressbar"                                                   aria-valuenow="'.$width.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$width.'%;padding-left:20px;color:black">
                                 '.$width.'% Complete 
                            </div>
                             
                        </div>'; 
                }
            ?>
            </div>
        </div>
        <div class="card m-5 text-center">
            
            <div class="card-body">
           
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7C_PsfDGfteu5j1bpnQRDeslqh3yhzYD7AA&usqp=CAU" height="200" class="card-img">
            <p class="card-text text-dark">C++</p>
            </div>
            <div class="card-footer">
                    <?php
                $q="select * from c_course where uid='$userid' and lid = 3";
                $result = mysqli_query($_SESSION['connection'],$q);
                $num=mysqli_num_rows($result);  
                $row = mysqli_fetch_array($result);            
                if($num==0){
                        echo '<a href="cpp_card_structure.php" class="btn btn-primary" data-toggle="modal" data-target="#cppmodal">check now</a><br>';
                    echo '<small class="card-text text-dark">unlock</small>';
                }
                else{
                    echo '<a href="cpp_card_structure.php" class="btn btn-primary m-1">Continue</a>';
                    $width=($row['percentage']/16)*100;
                    echo '<div class="progress">
                            <div class="progress-bar progress-bar-success bg-success progress-bar-striped progress-bar-animated" role="progressbar"                                                   aria-valuenow="'.$width.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$width.'%;padding-left:20px;color:black">
                                 '.$width.'% Complete 
                            </div>
                             
                        </div>'; 
                }
            ?>
            </div>
        </div>
        </div>


        <div class="row">
            <div class="focus csbody" > 
                <div class="focus--mask">
                    <div class="focus--mask-inner">Coming Soon</div>
                </div>
            </div>
        </div>
        <div class="card-deck">
        <div class="card m-5 text-center">
            
            <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcx_KG9BS3EFUf4HObMEIPFbEkvoS3Bxgpww&usqp=CAU" height="200" class="card-img">
            <p class="card-text text-dark">Python</p>
            <a href="#" class="btn btn-primary disabled" style="pointer-events: none;">Check now</a>
            </div>
            <div class="card-footer">
            <small class="card-text text-dark">unlock</small>
            </div>
        </div>
        
        <div class="card m-5 text-center">
            
            <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkUpwTsaFN18gjm8Pibq5Ws5ATQzvjAJjWTg&usqp=CAU" height="200" class="card-img">
            <p class="card-text text-dark">HTML & CSS </p>
            <a href="#" class="btn btn-primary disabled" style="pointer-events: none;">Check now</a>
            </div>
            <div class="card-footer">
            <small class="card-text text-dark">unlock</small>
            </div>
        </div>
        <div class="card m-5 text-center">
            
            <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_RE7MQVF1CthGodUq7oDFiZzHAYineXTvqA&usqp=CAU" height="200" class="card-img">
            <p class="card-text text-dark">PHP</p>
            <a href="#" class="btn btn-primary disabled">Check now</a>
            </div>
            <div class="card-footer">
            <small class="card-text text-dark">unlock</small>
            </div>
        </div>
        </div>

            

<div class="modal " id = "javamodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Java Programming Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="javasuccess" class="change" style="color:green;display:none">Successfully Enrolled...
        Wait for a while...
       </div>
        <p>Rules are as follow:</p>

      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-primary text-white" id="javabtn">Enroll Now</a>  

      </div>
      
    </div>
  </div>
</div>
<div class="modal " id = "cmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">C Programming Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="csuccess" class="change" style="color:green;display:none">Successfully Enrolled...
        Wait for a while...
       </div>
        <p>Rules are as follow:</p>

      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-primary text-white" id="cbtn">Enroll Now</a>  

      </div>
      
    </div>
  </div>
</div>
<div class="modal " id = "cppmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">C++ Programming Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="cppsuccess" class="change" style="color:green;display:none">Successfully Enrolled...
        Wait for a while...
       </div>
        <p>Rules are as follow:</p>

      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-primary text-white" id="cppbtn">Enroll Now</a>  

      </div>
      
    </div>
  </div>
</div>





            <div class="modal fade modal-bottom" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:30%">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header" style="background:black;color:white">
                <h5 class="modal-title ml-2" id="exampleModalLabel" style="color:white ">Selected your Interests course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center" style="background:white;color:black">
                <b>join course with us<b>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>


        </div>

<br><br>
<div class="feature-section">
  <div class="container">
    <div class="section-title text-center">
      <h2>Why ThoughtBitz?</h2>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="media">
          <div class="media__image">
            <i class="fas fa-medal"></i>
          </div>
          <div class="media__details">
            <h3>
              Programming made easy
            </h3>
            <p>
              We focus on simplicity. Programming tutorials and examples written in simple, understandable
              language
              for beginners.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media">
          <div class="media__image">
           
          </div>
          <div class="media__details">
            <h3>
              Content You Can Trust
            </h3>
            <p>
              A dedicated group of experts continually working to create programming resources that are
              accurate and easier to understand.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="media">
          <div class="media__image">
            
          </div>
          <div class="media__details">
            <h3>
              Learn by Doing
            </h3>
            <p>
              The only way to learn to program is by writing code. We provide a lot of complete examples
              so that run
              and edit code on your own.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>

        <div class="row   footer p-3 pl-5 " style="background-color:#F0F8FF; color: #707070;">
         <div class="col-lg-5 text-center col-xl-5 col-md-2">
            <div><img class="logo img-fluid" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>	
              
        </div>
        <div class="col-lg-2  col-xl-2 col-md-2 text-center">
            <div class="row">
            <div class="h4">Services</div>
            </div>
            <div class="row">
            <div class="p">Course</div>
            </div>
            <div class="row">
            <div class="p">Dashboard</div>
            </div>
            <div class="row">
            <div class="p">Blog</div>
            </div>
            <div class="row">
            <div class="p">Help</div>
            </div>
                            
        </div>
        <div class="col-lg-2  col-xl-2 col-md-2 text-center">
         <div class="row">
            <div class="h4">Support</div>
            </div>
            <div class="row">
            <div class="p">About Us</div>
            </div>
            <div class="row">
            <div class="p">Terms</div>
            </div>
           
              
        </div>
        <div class="col-lg-2 col-xl-2 col-md-2 text-center">
            <div class="row">
            <div class="h4">Connect With Us</div>
            </div>
            <div class="row">
            <div class="p">Facebook</div>
            </div>
            <div class="row">
            <div class="p">Twitter</div>
            </div>
            <div class="row">
            <div class="p">Instagram</div>
            </div>
            <div class="row">
            <div class="p">LinkedIn</div>
            </div>
            <div class="row">
            <div class="p">Telegram</div>
            </div>
              
        </div>
</div>

    <div class="row pl-3">
						<div class="col-sm-12 text-center " style="font-family: 'Roboto', sans-serif;">
							<div class="copyright-text">
								<p>CopyRight © 2020 ThoughtBitz</p>
							</div>
						</div> <!-- End Col -->
						
	</div>
        
</div>    

<script>

$(document).ready(function(){
            setTimeout(function(){
                var cookiecheck=getCookie('userid');
                if(cookiecheck==null){
                         $("#exampleModal").modal('show');
                }
                   
            },10000);
             
        });

</script>
<style>
.footer{
    font-family: 'Roboto', sans-serif;
}
.row .p:hover{
    color:#274abb;
    cursor:pointer;

}
.social-icons{
    
    margin: 0;
    padding: 0;
    font-size : 10px;
}

.social {
    margin:7px 7px 7px 0px;
    color:#b40028;
}


#social-fb:hover {
     color: #3B5998;
     transition:all .25s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .25s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .25s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .25s;
 }
</style>

</body>
</html>
