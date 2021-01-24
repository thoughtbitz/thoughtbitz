<?php
    include '../../database.php';
    
    $con=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$con){
      echo" connection unsuccessful";
    }
    $userid = $_COOKIE['userid'];
  
    $lid = trim(base64_decode(urldecode($_GET['lid'])),"dashboard viewposts");
    $course = array("","Java Course","C Course","C++ Course");
    $q = "select * from user where userid = $userid";
    $result = mysqli_query($_SESSION['connection'],$q);
    $row = mysqli_fetch_array($result);
?><!DOCTYPE html>
<html>
<head>
 <meta property="og:title" content="How to change the address bar color in Chrome, Firefox, Opera, Safari" />
<meta property="og:description" content="How to change the address bar color in Chrome, Firefox, Opera, Safari" />
<meta property="og:url" content="https://www.thoughtbitz.ml" />
<meta property="og:image" content="http://pollosweb.wesped.es/programa_pollos/play.png" />
<meta property="og:site_name" content="https://www.thoughtbitz.ml">
	<title>Certificate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
  <style>
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
.h2,.h3:hover{
    cursor:pointer;
    color:blue;
    
}
</style>
<script>
    function copy1(){
        var copy_url=document.getElementById("copy_button");
        copy_url.select();
        copy_url.setSelectionRange(0,100);
        document.execCommand("copy");
        alert('copied the url');


    }
</script>
<?php 




?>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar navbar-dark sticky-top bg-dark justify-content-between">
            <a class="navbar-brand" href="#"><div><img class="logo " src="/img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mx-auto apply">
                <li class="nav-item navs active px-5">
                <a class="nav-link navb text-white" href="../../dashboard?userid=<?php echo urlencode(base64_encode("dashboard".$userid."viewposts"));?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white " href="./mycourse.php">My Course </a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white" style="opacity:0">Bookmark <i class="fa fa-bookmark" aria-hidden="true"></i></a>
                </li>
            
        </ul>
        <li class="nav-item">
             <a class="nav-link " href=<?php echo "../../profile/user.php?user=".urlencode(base64_encode("users".$row['userid']));?> style="color:white;box-sizing:border-box;border-radius:15px;text-transform:capitalize">
     
         
        <?php 
        if(!empty($row['profileimage'])){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['profileimage'] ).'" alt="Admin" class="rounded-circle" width="50" height="50">';
        }
        else{
           echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjwvStWy9p8lfKQynnVowpVnbP7iQ_gTfo4w&usqp=CAU" circle="rounded-circle" width="50" height="50">'; 
        } 
            ?>
         &nbsp&nbsp<?php echo $row['username'];?>
        </a>
      </li>
      
            </div>
        </nav>
<nav>
<div class="container mt-5">
    <div class="row" style="background-color:#4B0082; border-radius:10px 10px;">
        <div class="col-12">
          <div class="h2 text-center text-white"><i class="fa fa-certificate " aria-hidden="true"></i>Congratulation<i class="fa fa-certificate " aria-hidden="true"></i></div>
        </div>
    </div>
    <div class="row p-2 m-2 " style="background-color:#F8F8FF; justify-content:space-around; display:flex;" >
                <div class="col-lg-3 p-2 " style="background-color:white; height:500px;border-radius:10px 10px;"  >
                    <div class="h3 m-2" style="font-family: 'Sansita Swashed', cursive;">
                    Share this Certificate
                    </div>
                    <div class="row p-2" style="justify-content:space-around;">
                            <a class="btn btn-primary col-lg-4 m-2" href="https://www.facebook.com/sharer/sharer.php?u=https://www.thoughtbitz.ml"> <i id="social-fb" class="fa fa-facebook-square  social"></i> &nbspShare</a>
                    
                            <a class="btn btn-primary col-lg-4 m-2" href="" ><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;Share</a>
                            <input type="text" value="https://www.thoughtbitz.ml/course/Certificate/certi1.php" id="copy_button">
                            <button class="btn btn-primary col-lg-4 m-2"  onclick="copy1()" >&nbsp;copy</button>
                    </div>
                
                </div>
                <div class="col-lg-8" style="background-color:white;border-radius:10px 10px;" >
                    <div class="h3" style="font-family: 'Sansita Swashed', cursive;"> This certificate By ThoughtBitz </div>
                    <div class="p mb-2">The certificate below verifies that <?php echo $row['username'];?> has completed course </div>
                    <img class="img-thumbnail" src= "certi.php?userid=<?php echo $row['username'];?> && coursename=<?php echo $course[$lid];?>&&mode=0" >
                        <div class="row p-2" style="justify-content:space-around;">
                                <a class="btn btn-success col-lg-5 m-2" href="certi.php?userid=<?php echo $row['username'];?> && coursename=<?php echo $course[$lid];?>&&mode=0" download>JPEG</a>
                        
                                <a class="btn btn-success col-lg-5 m-2" href="certi.php?userid=<?php echo $row['username'];?> && coursename=<?php echo $course[$lid];?>&&mode=1" download>PDF</a>
                        </div>
                </div>
    </div>


</div>
  
</body>
</html>