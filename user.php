<?php

include 'database.php';
include 'API/start.php';
mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
$getblogid=$_GET['user'];
$trimmedid=substr($getblogid,0,strlen($getblogid)-4);
$check=0;
$userid1=$_COOKIE['userid'];
$generatedmail=$trimmedid."@gmail.com";
$query="SELECT * FROM user where SUBSTRING(email,1,POSITION('@' IN email)-1)='$trimmedid'";
$exc=mysqli_query($_SESSION['connection'],$query);
$userarray=mysqli_fetch_array($exc,true);
$objects=new check;
$val=$objects->getidfrom($trimmedid,$_SESSION['connection']);
$myuser=$val;
if($val==$userid1){
    $check=1;
}
function checkblogs($userid){
    $queries="select * from blogs where userid1='$userid'";
    $execute=mysqli_query($_SESSION['connection'],$queries);
    $GLOBALS['info']=mysqli_fetch_array($execute);
    $GLOBALS['rows']=mysqli_num_rows($execute);
}
function checkviews($userid){
    $q="select sum(views) as total from blogs where userid1='$userid'";
    $run=mysqli_query($_SESSION['connection'],$q);
    $d=mysqli_fetch_array($run);
    return $d['total'];
}
    $q1="select * from c_course where uid='$myuser'";
    $result1 = mysqli_query($_SESSION['connection'],$q1);
    $num1=mysqli_num_rows($result1); 
    $complete = array();
    $notcomplete = array();
    $topic = array("","Java","C","CPP");
    $color = array("","yellow","orange");
    while($row = mysqli_fetch_array($result1)){
         if($row['percentage'] == 16){
            array_push($complete,$row['lid']);
         }
         else{
            array_push($notcomplete,$row['lid']);
         }
    }
checkblogs($myuser);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="ThoughtBitz">
<meta name="description" content="Aimed to provide the comon platform">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thoughtbitz.ml/">
<meta property="og:title" content='<?php echo $userarray['username'];?>'>
<meta property="og:description" content='<?php echo $userarray['username']." "."profile...On thoughtBitz(Indian Platform)";?>'>
<meta property="og:image" itemprop="image" content="https://www.thoughtbitz.ml/img/favicons.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.thoughtbitz.ml/">
<meta property="twitter:title" content='<?php echo $userarray['username'];?>'>
<meta property="twitter:description" content='<?php echo $userarray['username']." "."profile...On thoughtBitz(Indian Platform)";?>'>
<meta property="twitter:image" content="https://www.thoughtbitz.ml/img/favicons.png">


    <title>Profile Page</title>
    <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="https://www.thoughtbitz.ml/Blogs/favicon2.png" type="image/x-icon">
<style>
.view{
    text-align:left;
}
.container-fluid{
    padding-right:0;
    padding-left:0;

}
.container{
    padding-right:0;
    padding-left:0;

}
body{
   
}
* {
      margin: 0;
      padding: 0;
    }
    .dropbtn {
 
  color:black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdowns{
  position: relative;
  display: inline-block;
}
.mv{
      box-shadow:0 0 15px rgba(0,0,0,0.4);
     
    }
    
    @media only screen and (min-width : 992px) {
     
    
  .vb{
      width:60%;
  }
  .bn{
      width:40%;
     height:100%;
  }
    }
    @media only screen and (min-width : 1000px) {
    .mv{
    width:100%;
  
  }
    
  .vb{
      width:60%;
  }
  .bn{
      width:40%;
     height:100%;
  }
    }
    @media only screen and (max-width:768px) {
        .view{
    text-align:center;
}
  .mv{
    width:100%;
    height:160px;
    
  }
    
  .vb{
      width:60%;
  }
  .bn{
      width:40%;
     height:100%;
  }}
.dropdown-content {
  display: none;
  position:absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {color:black;}

.dropdowns:hover .dropdown-content {
  display: block;
}

.dropdowns:hover .dropbtn {
  background-color:transparent;
}

//monil's code for css of profile
 .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%;
    }
    .shadow-none {
        box-shadow: none;
    }
 //code end....
  @media only screen and (max-width:768px){
                            .card-title{
                                font-size:10px;
                            }
                             .card-img{
                                height:116px;

                            }   
                            .card{
                                 height:120px;
                            }    
                            .text-muted{
                                font-size:8px;
                            }    
                            a{
                                font-size:15px;
                            }
                         
                        } 
                          @media only screen and (min-width:768px){
                            a{
                                font-size:1.4rem;
                            }
                            .card-title{
                               font-size:1.3rem;
                            }
                            .card-img{
                                height:200px;

                            }  
                             .text-muted{
                                font-size:15px;
                            }   
                            body{
                                font-size:1 rem;
                            }    

                        }   
</style>
</head>
<body>
<div class="container-fluid  overflow-hidden">
    <div class="row  text-center">
        <div class="col-sm-12  text-center text-primary" style="background:#e6e600;color:black">
            <ul class="nav nav-tabs  nav-justified text-center" >
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active text-white"><h4>Profile</h4></a>
                </li>
                <?php if( $check==1){
                    echo '
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link"><h4>Messages(not here)</h4></a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link"><h4>Edit</h4></a>
                </li>';
                }?>
            </ul>
        </div>
    </div>     
</div>      
    <div class="container">
        <div class="row  text-center">
            <div class="tab-content ">
                <div class="tab-pane active" id="profile">
                    <br>
                    <div class="main-body">
    
         
                        <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <?php
                                                if(!empty($userarray['profileimage']))
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($userarray['profileimage'] ).'" alt="Admin" class="rounded-circle" width="150"';
                                                    
                                                else{
                                                    echo '<img src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Admin" class="rounded-circle" width="150"';
                                                }    
                                                    ?>
                                            <!--img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"-->
                                            <div class="mt-3">
                                            <h3><?php echo $userarray['username'];?></h3>
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        
                                    </div>
                                </div>
                            <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                    <h4 class="h4 mb-0">User Name :</h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-2  text-secondary view">
                                        <h4 id="h41"><?php echo $userarray['username'];?><!--Monil Baxi--></h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                    <h4 class="h4 mb-0">Email :</h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-2 text-secondary view">
                                    <h4><?php echo $userarray['email'];?><!--monilnbakshi@gmail.com--></h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                    <h4 class="">Recent Badges:</h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1  text-secondary view">
                                        <?php
                                            if(count($complete)==0){
                                                echo '<a href="#" class="badge badge-dark badge-pill" style="color:grey;color:white;">None</a>';
                                            }
                                            else{
                                                for($i=0;$i<count($complete);$i++){
                                                    echo '<a href="#" class="badge badge-dark badge-pill" style="color:'.$color[$i].'">'.$topic[$complete[$i]].'</a>&nbsp;&nbsp;';            
                                                }
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                    <h4 class="">Current :</h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-2  text-secondary view">
                                        <?php
                                            if(count($notcomplete)==0){
                                                echo '<a href="#" class="badge badge-dark badge-pill" style="color:grey;color:white;">None</a>';
                                            }
                                            else{
                                                for($i=0;$i<count($notcomplete);$i++){
                                                    echo '<a href="#" class="badge badge-dark badge-pill" style="color:'.$color[$i].'">'.$topic[$notcomplete[$i]].'</a>&nbsp;&nbsp;';            
                                                }
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="row">
                                <div class="col-sm-3 h4 text-center">Posts:</div>
                                    <div class="col-sm-7 col-sm-offset-2  text-secondary view">
                                    <h4 class="mb-0">
                                        <span style="font-size:2rem"><?php echo $rows;?>&nbsp;&nbsp;posts</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="badge"><i class="fa fa-eye" style="color:yellow;font-size:1.3rem">&nbsp;&nbsp;</i><?php echo checkviews($myuser);                                        ?> Views</span>  
                                    </h4>
                                    </div>
                            
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3 text-center ">
                                    <h4 class="mb-0">Description :</h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-2  text-secondary view">
                                    <h4><?php echo $userarray['description'];?><!--I'm from Vadodara,Gujarat.--></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                                    
                    <br>
            <div class="row">
                
                    <h1>Posts</h1>
                            <?php
                $q="select * from blogs where userid1=$myuser";
              $result = mysqli_query($_SESSION['connection'],$q);
              $nums=mysqli_num_rows($result);
              $output='';
              if($nums>=1){
                $count=1;
               while(($row1=mysqli_fetch_array($result,true))!=NULL){
                  
                    $url=urlencode("https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid=".urlencode(base64_encode("blogs".$row1['blogid'])));
                    $output='

                    <div class="card mb-3" style="border-radius:15px;background-image:url(https://i.pinimg.com/originals/9e/74/7d/9e747dd76f1be3d062748e6b3d030f6b.jpg)" >
                        <div class="row no-gutters">
                            <div class="col-sm-4 ">
                         <img src="https://www.thoughtbitz.ml/Blogs/uploads/'.$row1['thumbnail'].'"
                            class="card-img " style="border-radius:0px 15px 15px 0px;padding:2rem;" weight="250px" height="250px">
                            </div>
                            <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' && check='.$check.'"  class="card-title" style="text-decoration:none;font-weight:bolder;color:black;padding-top:15px;font-size:3rem;" >&nbsp;'.substr($row1["blogtitle"],0,30).'..</a></h5>
                                <p class="card-text">&nbsp;'.strtolower(substr(strip_tags($row1["blogtext"]),0,50)).'</p>
                                <p class="card-text"><small class="text-muted"><a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDNjjW3kRo2U4VTaMTntt1o1kGEa3bWP6Y7Q&usqp=CAU" height="20" width="20"></a><a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi8Ph1Ga9ReNqmOg3In7GUajmFeHcBp4LC8g&usqp=CAU" height="20" width="20"></a><a href="https://web.whatsapp.com/send?text='.$url.'" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-U_6gwWityJAnciueDBp_AT5P7kzLTJOHdw&usqp=CAU" height="20" width="20" style="border-radius:40%"></a></small></p>
                            </div>
                            </div>
                        </div>
                        </div>
                                            
                ';
              
                echo $output;

              
            

            }
            
        }
        else{
            $output='<div class="card mb-3 h-20">
                        NO POSTS YET
                    </div>'; 
                    echo $output; 
        }
                 
                  
        ?>
                    </div>
                    <!--/row-->
                </div>
                <?php
                 if( $check==1 ){
                    echo '
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> here some advertised content from ThoughtBitz
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> one blog was created from monil let&#039;s have a look
                                </td>
                            </tr>
                           
                        </tbody> 
                    </table>
                </div>
                <br>
              
                <div class="tab-pane" id="edit">
                    <form role="form" method="POST" action="https://www.thoughtbitz.ml/useredit.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label form-control-label">Profile Pic : </label>
                            <div class="col-sm-6">
                                <input class="form-control" id="file" type="file" value=""  name="Profile" style="border :0px;box-shadow:0px;display:none;" accept="image/*" onchange="readURL(this)">
<div style="width:10rem;height:10rem;border:1px dashed black;box-sizing: border-box;position:relative"><img id="image" src="data:image/jpeg;base64,'.base64_encode($userarray['profileimage'] ).'" style="width:9.8rem;height:9.8rem;position:absolute;left:0px"/><label for="file" ><i class="fa fa-pencil" aria-hidden="true" style="margin-top:65%;left:75%;position:absolute;color:cyan;font-size:2rem"></i></label></div>
                               
                                
                               
                                
                            </div>
                            <div class="col-sm-3">
                                <input type="submit"  name="update2" value="Update" class="btn btn-success">
                            </div>  
                        </div>
                        
                    </form>
                   
                    <form role="form" method="POST" action="https://www.thoughtbitz.ml/useredit.php">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label form-control-label">User name :</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" value="'. $userarray['username'].'"  name="oman">
                            </div>
                            <div class="col-sm-3">
                                <input type="submit"   name="update1" value="Update" class="btn btn-success">
                            </div>  
                        </div>
                        
                    </form>
                     <form role="form" method="POST" action="https://www.thoughtbitz.ml/useredit.php">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label form-control-label">Description : </label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" value=" '.$userarray['description'].'"  name="Description">
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" name="update3" value="Update" class="btn btn-success">
                            </div>  
                        </div>
                        
                    </form>
                </div>';
                }
                ?>
            </div>
        </div>
        
    </div>
</div>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(98)
                    .height(98);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

 </script>   
</body>
</html>
<?php
            
?>