<?php
  include '../API/start.php';
  include '../database.php';
  $userid='';
  $vari1=0;
if(isset($_COOKIE['userid'])){
   
$userid=$_COOKIE['userid'];

$vari1=1;
$cvb=new check;
$fgh=$cvb->check_login($userid,$_SESSION['connection']);
        if($fgh!=1){
            $vari1=0;
            $userid=NULL;

         
        }
//  mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
//   $q="select * from user where userid='$userid'";
//   $result = mysqli_query($_SESSION['connection'],$q);
//   $arrayobj=mysqli_fetch_array($result);
  function check($userid,$blogid){
    $q1="select * from main where userid='$userid' and blogid=$blogid ";
    $result=mysqli_query($_SESSION['connection'],$q1);
    $gh=mysqli_fetch_array($result);
    $GLOBALS['num'] = mysqli_num_rows($result);
    }
}
else if(isset($_GET['welcome'])){
    $vari1=1;
    
   
  $myid=$_GET['welcome'];
  $decoded=base64_decode(urldecode($myid));
  ini_set('display_errors',1);
  $userid=trim($decoded,"welcome");
  $cvb=new check;
  $fgh=$cvb->check_login($userid,$_SESSION['connection']);
  if($fgh!=1){
   $vari1=0;
   $userid=NULL;


  }
   function check($userid,$blogid){
    $q1="select * from main where userid='$userid' and blogid=$blogid ";
    $result=mysqli_query($_SESSION['connection'],$q1);
    $gh=mysqli_fetch_array($result);
    $GLOBALS['num'] = mysqli_num_rows($result);
  }
}
else{
    $vari1=0;
    
   
}
mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
  $q="select * from user where userid='$userid'";
  $result = mysqli_query($_SESSION['connection'],$q);
  $arrayobj=mysqli_fetch_array($result);

$backgrounds= array("Technology"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnuiOkfHVShnfH4_b-FLKvqonxwn9EUXz3NA&usqp=CAU", "Food"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hewqph7xEd3u7LqJs80e-AyIcn3eZmaNVg&usqp=CAU", "Travel"=>"https://wikitravel.org/customHP/images/map.png","History"=>"","Entertainment"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRXlYjaM_T3M0Tap3J7mvkCy_i211RVpVGSg&usqp=CAU","Movies"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxxI5sjckPLV0bqMDHxp7A0rrqOsSXU76dkUCX4HfLf09PBCQMoioLJJbEk6ck_a9ZoTRm3DB_21V7uzjkaTuqOLY_KO_oy37RWg&usqp=CAU&ec=45761792","Music"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfgq3vukxCYFDZUjyinaVNo3CyAz5TSf3X-w&usqp=CAU","Comedy"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9XFitN08NW2-wPzjzoG4rl7nkKDDZhcLjpQ&usqp=CAU","Health"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrMgFnbDch3q3hX9Rk73wPG6JHFobRTJx5eA&usqp=CAU","Information Technology"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSi4Iq70FRHOJ_YufxBtumWev_VkfEWzaNsw&usqp=CAU","Programming"=>"
https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZEy9UtrkVNVrQkriY2fM-bH2-as6JCZ3cHQ&usqp=CAU","Sports"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwLjpC2tzooiueGg758ftK6n0gQ_Ab9EF8hw&usqp=CAU","Weather condition"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAWMxtQep2TDU50WBwrNwKxMDeQx5ayhJGbA&usqp=CAU","News"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrLTBnqnp73LjcPTLQtK-JcWY7SDUgVxs2NaAhRdbScMti4hv8ZOvBSYDMD20UPAATX4F9xWMIZqdbn8VBxepfSfpEL6t34MEvmQ&usqp=CAU&ec=45761792","Others"=>"");
$getback=json_encode($backgrounds);
$obj = json_decode($getback,true);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThoughtBitz">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Blog Dashboard</title>

    
    

    <!-- Bootstrap core CSS -->
    <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../b/bootstrap.js"></script>
  <link rel="stylesheet" href="../b/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function(){
	  $('.navbar-toggler,.overlay').on("click",function(){
	     $(".mobile-menu").toggleClass('open');
	  });
	});
if(!!window.performance && window.performance.navigation.type===2){

      console.log('Reloading');
      window.location.reload();
}
     function liked(x) {
      console.log($(x).attr('id'));
  $.ajax(
{

  url:"like.php?blogid="+$(x).attr('id')+"&&userid=<?php echo $userid;?>",

    success:function(data){
    if(data==1){


        $(x).css('color', 'blue');
        
    }
    else{
        $(x).css('color', 'black');
    }
}
}
)
}

  </script>
  <script>
function putin(x){
    $('#search_text').val(x.innerText);  
}
  </script>
    <style>
    body{
        background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHDZgYoK3cPiRK899G9OTSrUgFYeadxJPjXg&usqp=CAU');
        background-size:cover;
        background-repeat:no-repeat;
    }
    .open{
   transform:translatex(0%);
   display:block;
 }
    .navb{
  display: inline-block;
  padding: 10px 40px;
  color:cyan;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#button-addon1 i:hover {
    color:RGB(127,255,0);
    transform:scale(1.5);

}

.navb:hover {
  background:black;
  color:cyan;
   border-radius: 25px;
  border: 2px solid cyan;
}
.navbar-brand{
      display:flex;
      justify-content:space-around;
    }
    .logo-mark{
      color:white;
      font-family: 'Lobster', cursive;
      padding:0.3rem 1rem;
      font-size:1.5rem;
      box-shadow:0 0  rgba(255,254,253,0.4);
    }
    
    .mv{
      box-shadow:0 0 15px rgba(0,0,0,0.4);
     
    }
    #scrollpost{
    overflow-y:scroll;
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
  .logo{
      border-radius:50%;
      height:50px;
      width:50px;
      margin-bottom:0.5rem;
      box-shadow:0 0 10px rgba(255,255,255,0.4);
    }
    
  
}
     @media only screen and (max-width:992px){
           .open{
   transform:translatex(0%);
   display:block;
 }
   .footer-logo{
    margin-left:3.5rem;
}

  .mobile-menu{
    position:fixed;
	top:0;
	left:0;
	width:60%;
	height:100vh;
	background-color:white;
	transform:translatex(-100%);
	padding:10px 15px;
	margin:auto;
	overflow:auto;
	z-index:1010;
	transition:all ease 0.29s;
  }
  
  .overlay{
    position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100vh;
	background-color:rgba(0,0,0,0.5);
	z-index:99;
	display:none;
  }
  
  }
    .navbar-brand{
      display:flex;
      justify-content:space-around;
    }
    #search_text{
        outline:none;
    }
    ::placeholder {
    color:blue;
    opacity: 1; 
    }
    .nav-link:hover{
        color:blue;
    }
    .navbar-nav  li a{
   display:block;
   font-size:17px;
   text-transform:capitalize;
   letter-spacing:0.2px;
   color:#373A3C;
   font-weight:600;
   margin:0px 10px;
   position:relative;
   line-height:30px;
   font-family: 'Montserrat', sans-serif;
   text-decoration:none;
 }
    .logo{
      border-radius:50%;
      height:50px;
      width:50px;
      margin-bottom:0.5rem;
      box-shadow:0 0 10px rgba(255,255,255,0.4);

    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      //nav left to right
 @media (min-width: 768px) {
           .open{
   transform:translatex(0%);
   display:block;

 }
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        #carouselExampleIndicators{
             height:90vh;
        }
        .carousel-item{
            height:500px;
        }
    
        .carousel-item img{
            height:500px;
        }
      }
      @media (max-width: 992px) {
    .navbar-collapse {
        position: fixed;
        top: 50px;
        left: 0;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        width: 75%;
        height: 100%;
    }

    .navbar-collapse.collapsing {
        left: -75%;
        transition: height 0s ease;
    }

    .navbar-collapse.show {
        left: 0;
        transition: left 300ms ease-in-out;
    }

    .navbar-toggler.collapsed ~ .navbar-collapse {
        transition: left 500ms ease-in-out;
    }
    .carousel-item{
        height:300px;
    }
    #carouselExampleIndicators{
        height:50vh;
    }
    .carousel-item img{
        height:350px;
    }
}

    </style>
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
  <div class="overlay"></div>
        <header class="bg-light sticky-nav">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" class="logo img-fluid">&nbsp;&nbsp;
        <h1 style="font-family: 'Lobster', cursive;font-size:1.5rem">ThoughtBitz</h1>
      </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse bg-dark" id="navbarCollapse">
		<ul class="navbar-nav mr-auto mt-3 " style="justify-content:space-around;">
			 <li class="nav-item active">
        <a class="nav-link" href="../dashboard"><strong>Home</strong><span class="sr-only">(current)</span></a>
      </li>
      <?
      if($vari1!=0){
      echo
      '<li class="nav-item text-white active">
        <a class="nav-link" href="./createBlog"><strong>create Blog</strong></a>
      </li>
     
      <li class="nav-item text-white active">
     <a class="nav-link " href="../user/'.substr($arrayobj['email'], 0, strpos($arrayobj['email'], '@')).'" style="box-sizing:border-box;border-radius:15px;text-transform:capitalize;padding:0px 0px 10px 0px">';
      
        if(!empty($arrayobj['profileimage'])){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($arrayobj['profileimage'] ).'" alt="Admin" class="rounded-circle" width="50" height="50">';
        }
        else{
           echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjwvStWy9p8lfKQynnVowpVnbP7iQ_gTfo4w&usqp=CAU" circle="rounded-circle" width="50" height="50">'; 
        } 
        echo '&nbsp;<strong>';
       echo $arrayobj['username'].'</strong>';
       echo '
        </a>
      </li>
      <li class="nav-item">
             <a href="../loginwork/action.php?event=logout" class="text-decoration-none  text-white" style="margin-top:10px"><strong>Logout&nbsp</strong><i class="fa fa-sign-out" aria-hidden="true"></i></a>
      </li>';
      }
      
      ?>
		</ul>
		
	  </div>
    </nav>
  </div>
  </header> 
    
   
  
 <div class="container-fluid  overflow-hidden" style="margin-top:3rem">
    <div class="row  text-center">
        <div class="col-sm-12  text-center text-primary" style="color:black">
            <ul class="nav nav-tabs  nav-justified text-center mt-5"  >
                <li class="nav-item">
                    <a href="" data-target="#nav-home" data-toggle="tab" class="nav-link active "><i class="fa fa-home" style="color:blue"></i>&nbsp;&nbsp;&nbsp;Home</a>
                </li>
               
                <li class="nav-item">
                    <a href="#nav-profile" data-target="#nav-profile" data-toggle="tab" class="nav-link"><i class="fas fa-poll" style="color:blue"></i>&nbsp;Trending</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#nav-contact" data-toggle="tab" class="nav-link"><i class="fas fa-fire" style="color:red"></i>&nbsp;Popular</a>
                </li>
            
            </ul>
        </div>
    </div>     
</div>      

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <main role="main">
                    

                <div class="container-fluid ">
                    


                    <div class="row">
                        <div class="col-sm-12">
                    

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" style="">
                            
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner  " >
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://www.michaelpage.co.in/sites/michaelpage.co.in/files/Future_of_HR_BlogGIF.gif" alt="Second slide" style="height:500px">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://greengingerdigital.com/wp-content/uploads/2020/05/User-Interface-User-Experience-1.gif" alt="First slide" style="height:500px">
                                </div>
                                
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://bloopglobal.com/wp-content/uploads/2020/11/interactive-presentation-header-1.gif" alt="Third slide"  style="height:500px">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 ">
                        
                        <div class="col-lg-12 mx-auto">
                            <div class="bg-transparent p-5 rounded shadow">
                                <form action="searchresult.php" autocomplete="off">
                                    <div class="p-1 bg-dark rounded rounded-pill shadow-sm mb-4">
                                    
                                        <div class="input-group">
                                            <input type="search" name="query" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0 bg-light" id="search_text">
                                        <div class="input-group-append">
                                            <button id="button-addon1" type="submit" class="btn btn-link text-primary" ><i class="fa fa-search"></i></button>
                                        </div>
                                        </div>
                                    </div>
                                        <div id="result" class="card" style="text-align:center;z-index:1400;position:absolute;margin-top:0px;"></div>    
                                </form>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
        </main>
            <div class="album py-5" style="background-repeat:no-repeat;background-size:cover">
            
                <div class="container">
                <div class="h2 text-center bg-dark text-white" style="font-family: 'Teko', sans-serif;align:center;border-radius:10px 10px;"><strong>Posts</strong></div>
                <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 text-center">
                            <img src="../img/BlogAdddesign.png" width="100%">
                        </div>
                        <div class="col-sm-2"></div>
                </div>

                <div class="row">
                        
                    
                   
                        <?php
                            include '../database.php';
                            
                        mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
                            $q="select a.*,b.username from blogs a inner join user b on a.userid1=b.userid order by a.blogid desc";
                        $result = mysqli_query($_SESSION['connection'],$q);
                        $nums=mysqli_num_rows($result);
                        $output='';
                        if($nums>=1){
                            $count=1;
                        while(($row1=mysqli_fetch_array($result,true))!=NULL){
                            
                            $url=urlencode("https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid=".urlencode(base64_encode("blogs".$row1['blogid'])));
                                $output='            
                            
                <div class="col-md-4" style="padding-top:3rem">
                    <div class="card mb-4 shadow-sm" style="height:100%;border-radius:15px;padding:0.5rem;box-shadow: 5px 5px 5px #aaaaaa;">
                        <a href="WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' &&check='.$vari1.'">
                        <img src="uploads/'.$row1['thumbnail'].'"
                                        class="card-img" height="200" style="border-radius:10px 10px;"></a>
                                                                <div class="card-body" style="font-size:1rem;background-image:url('.$obj[$row1['categoryname']].');background-size:cover;background-repeat:no-repeat" >
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9iS4887MqYnErWEHhNy-G2i11h3mG8IG9-Q&usqp=CAU" height="50" width="50"><b>&nbsp;&nbsp;'.$row1['username'].'</b>
                            <p class="card-text" style="font-size:1rem;z-index:20;">
                            <a href="WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' &&check='.$vari1.'"  class="card-title" style="text-decoration:none;font-weight:bolder;color:black;padding-top:15px;">&nbsp;'.substr($row1["blogtitle"],0,30).'..</a></p>
                            <div class="card-text">
                            '.strtolower(substr(strip_tags($row1["blogtext"]),0,50)).'
                            </div>
                            <p class="card-text text-dark" style="z-index:20;">
                                <b>'.$row1['categoryname'].'</b>
                            </p>
                        </div>
                            <div class="d-flex  card-foooter justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDNjjW3kRo2U4VTaMTntt1o1kGEa3bWP6Y7Q&usqp=CAU" height="20" width="20"></a><a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi8Ph1Ga9ReNqmOg3In7GUajmFeHcBp4LC8g&usqp=CAU" height="20" width="20"></a><a href="https://web.whatsapp.com/send?text='.$url.'" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-U_6gwWityJAnciueDBp_AT5P7kzLTJOHdw&usqp=CAU" height="20" width="20" style="border-radius:40%"></a>
                                </div>
                                <small class="bg-dark text-white">'.to_time_ago($row1['datetime']).'</small>
                                <small class="text-white bg-dark" style="border-radius:5px;padding-left:1px">'.$row1['views'].'&nbspVisits</small>
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
                        
                        
// PHP program to convert timestamp 
// to time ago 
  
function to_time_ago( $time ) { 
      
    // Calculate difference between current 
    // time and given timestamp in seconds 
    $diff = time() - $time; 
      
    if( $diff < 60) {  
        return 'just now posted';  
    } 
      
    $time_rules = array (  
                12 * 30 * 24 * 60 * 60 => 'year', 
                30 * 24 * 60 * 60       => 'month', 
                24 * 60 * 60           => 'day', 
                60 * 60                   => 'hr', 
                60                       => 'min', 
                1                       => 'sec'
    ); 
  if($diff>=60){
    foreach( $time_rules as $secs => $str ) { 
          
        $div = $diff / $secs; 
  
        if( $div >= 1 ) { 
              
            $t = round( $div ); 
              
            return $t . ' ' . $str .  
                ( $t > 1 ? 's' : '' ) . ' ago'; 
        } 
    }
  } 
}  
                    ?>
                    
                </div>
                </div>
            </div>          
</div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="album py-5 bg-light">
                <div class="container mt-5" >
                <div class="h2 text-center bg-dark text-white" style="font-family: 'Teko', sans-serif;align:center;border-radius:10px 10px;"><strong>Trending</strong></div>
                     

                        <div class="row" id="ajaxfetch">
                
                        </div>
                
                </div>
            </div>
        </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <div class="container mt-5 bg-light">
      <div class="h2 text-center bg-dark text-white" style="font-family: 'Teko', sans-serif;align:center;border-radius:10px 10px;"><strong>Popular</strong></div>
        <div class="row">
                <?php
                        include '../database.php';
                    mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
                        $q="select a.*,count(b.like_name) as counts from blogs a,main b where a.blogid=b.blogid group by a.blogid order by counts desc,a.views desc limit 5";
                    $result = mysqli_query($_SESSION['connection'],$q);
                    $nums=mysqli_num_rows($result);
                    $output='';
                    $me='';
                    if($nums>=1){
                        $count=1;
                    while(($row1=mysqli_fetch_array($result,true))!=NULL){
                            $output.='            
                             <div class="col-md-4" style="padding-top:3rem">
                    <div class="card mb-4 shadow-sm" style="height:100%">
                    <a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' &&check='.$vari1.'">
                        <img src="uploads/'.$row1['thumbnail'].'"
                                        class="card-img" height="300"></a>
                        <div class="card-body" style="font-size:1.2rem;">
                        <b>&nbsp;&nbsp;'.$row1['username'].'</b>
                        <p class="card-text" style="font-size:1rem;">
                        <a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' &&check='.$vari1.'"  class="card-title" style="text-decoration:none;font-weight:bolder;color:black;padding-top:15px;">&nbsp;'.substr($row1["blogtitle"],0,30).'..</a></p>
                        <p class="card-text">
                            '.strtolower(substr(strip_tags($row1["blogtext"]),0,50)).'
                            </p>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                            Share
                            <a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDNjjW3kRo2U4VTaMTntt1o1kGEa3bWP6Y7Q&usqp=CAU" height="20" width="20"></a><a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi8Ph1Ga9ReNqmOg3In7GUajmFeHcBp4LC8g&usqp=CAU" height="20" width="20"></a><a href="https://web.whatsapp.com/send?text='.$url.'" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-U_6gwWityJAnciueDBp_AT5P7kzLTJOHdw&usqp=CAU" height="20" width="20" style="border-radius:40%"></a>
                            </div>
                            <small class="text-muted">'.$row1['counts'].'&nbspLikes</small>
                        </div>
                        </div>
                    </div>
                    </div>';
                    

                    
                    }
                    echo $output;
                }
                else{
                    $output='<div class="card mb-3 h-20">
                                NO POSTS yet got popularity
                            </div>'; 
                            echo $output; 
                }
                        
                        
                ?>
        
      </div>
    </div>
  </div>


   
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>



</script>
<script>
$(document).ready(function(){
       $.ajax({
                    url:"trending.php",
                    method:"POST",
                    success:function(data){
                        
                        $("#ajaxfetch").html(data);
                    }
                });
    
     function load_data(query)
	{
		$.ajax({
			url:"searchsuggestion.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
        else{
            load_data();
        }
		
	});
    $("#search_text").blur(function(){
  $('#result').html();
});
               
})


  function cursor() {
    document.getElementById("my").style.cursor = "pointer";
    document.getElementById("mm").style.cursor = "pointer";
  }
  
</script>

</body>
</html>
