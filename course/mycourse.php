<?php
    include '../database.php';
    $userid = $_COOKIE['userid']; 
    mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
    $q="select * from c_course where uid='$userid'";
    $result = mysqli_query($_SESSION['connection'],$q);
    
    $num=mysqli_num_rows($result); 
    $complete = array();
    $notcomplete = array();        
    $percent = array();
    $notpercent = array();   
    $topic = array("","Java","C","C++","Python","C#","DS");    
    $topic1 = array("","java","c","cpp","Python","C#","DS");    
    while($row = mysqli_fetch_array($result)){
         if($row['percentage'] == 15){
            array_push($complete,$row['lid']);
            array_push($percent,$row['percentage']);
         }
         else{
            array_push($notcomplete,$row['lid']);
            array_push($notpercent,$row['percentage']);
         }
    }    
    $q1 = "select * from user where userid = $userid";
    $result1 = mysqli_query($_SESSION['connection'],$q1);
    $row = mysqli_fetch_array($result1);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyCourse Dashboard</title>
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
  .card{
  box-shadow:0 0 10px rgba(0,0,0,.4), 0 4px 8px rgba(0,0,0,.6);
  background-image:url('https://img.freepik.com/free-vector/gradient-geometric-shape-background_78532-374.jpg?size=626&ext=jpg');

  font-family: 'Oswald', sans-serif;
}
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
.card:hover{
     transform: scale(1.20);
     box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
.card-footer{
    color:white;
}
.h1:hover{

}
.h1{
  background-color:#F0FFFF;
  font-family: 'Oswald', sans-serif;
  
  
}
.container{
  background-color:#F0FFFF;
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

  </style>
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
            
        
        <li class="nav-item">
        <a class="nav-link " href='<?php echo "../user/".substr($row['email'],0,strpos($row['email'],'@'));?>' style="color:white;box-sizing:border-box;border-radius:15px;text-transform:capitalize">
     
         
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
      </ul>
            </div>
        </nav>
<div class="container-fluid" style="background:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQm_Eo5yCm60EqiZp2LhgI9RPGkW9ZTotXJw&usqp=CAU');background-repeat:no-repeat;background-size:cover">
<div class="row">
    <?php
        if($num==0){
            echo '<div>Kindly Enroll in Course</div>';
        }
        if($num!=0){
            echo '<div class="col-lg-12 h2">In Progress</div>';
        }
    ?>
    
</div>

<div  class = "row">
    <?php
      for($i = 0; $i < count($notcomplete) and $num !=0; $i++){
        echo ' 
        <div class="card m-5 text-center col-lg-4">
            
            <div class="card-body">
            <h5 class="card-title">Course</h5>
            <p class="card-text">'.$topic[$notcomplete[$i]].'</p>
            <a href="'.$topic1[$notcomplete[$i]].'_card_structure.php?lid='.urlencode(base64_encode("dashboard".$notcomplete[$i]."viewposts")).' " class="btn btn-primary">check now</a>
            </div>
            <div class="card-footer">';
            
                if($num==0)
                    echo '<small class="card-text">unlock</small>';
                else{
                    $width=($notpercent[$i]/15)*100;
                    echo '<div class="progress">
                            <div class="progress-bar progress-bar-success  " role="progressbar" aria-valuemin="0" aria-valuemax="100"                                                  aria-valuenow="'.$width.'"  style="width:'.$width.'%;padding-left:20px;color:black">
                                  '.$width.'% Complete 
                            </div>
                        </div>'; 
                }
            
            echo'
            </div>
        </div>';
    }
    ?>
        </div>
        <div class="row">
        <?php
            if($num!=0){
                echo '<div class="col-lg-12 h2">Completed</div>';
            }
        ?>
        </div>
        <div  class = "row">
    <?php
      for($i = 0; $i < count($complete) and $num !=0; $i++){
        echo ' 
        <div class="card m-5 text-center col-lg-4">
            
            <div class="card-body">
            <h5 class="card-title">Course</h5>
            <p class="card-text">'.$topic[$complete[$i]].'</p>
            <a href="'.$topic1[$complete[$i]].'_card_structure.php?lid='.urlencode(base64_encode("dashboard".$complete[$i]."viewposts")).' " class="btn btn-primary">Visit Again</a>
            </div>
            <div class="card-footer">';
            
                if($num==0)
                    echo '<small class="card-text">unlock</small>';
                else{
                    $width=($percent[$i]/15)*100;
                    echo '<div class="progress">
                            <div class="progress-bar progress-bar-success  progress-bar-striped progress-bar-animated" role="progressbar"                                                   aria-valuenow="'.$width.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$width.'%;padding-left:20px;color:black">
                                  '.$width.'% Complete 
                            </div>
                        </div>'; 
                }
            
            echo'
            </div>
        </div>';
    }
    if(count($complete)==0){
        echo '<div style="text-align:center"><h2>Not Complete yet!!!</h2></div>';
    }
    ?>
        </div>

        </div>
</body>
</html>