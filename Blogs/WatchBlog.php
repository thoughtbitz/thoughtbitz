<?php
include '../database.php';
$getblogid=$_GET['blogid'];
$check=$_GET['check'];
$decoded=base64_decode(urldecode($getblogid));

$real_userid=$_COOKIE['userid'];


 
$myidofblog=trim($decoded,"blogs"); 

mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
$query="select b.*,u.* from blogs b,user u where b.blogid='$myidofblog' and u.userid=b.userid1";
$output=mysqli_query($_SESSION['connection'],$query);
$blogarray=mysqli_fetch_array($output,true);
$userid1=$blogarray['userid'];
$views=$blogarray['views'];
$views++;
function countlike($blogid){
    $query4="select count(like_name) as counts from main where blogid='$blogid'";
    $exc=mysqli_query($_SESSION['connection'],$query4);
    $zc=mysqli_fetch_array($exc);
    $GLOBALS['likes']=$zc['counts'];
}
countlike($myidofblog);
 function check($userid,$blogid){
  $q1="select * from main where userid='$userid' and blogid=$blogid ";
  $result=mysqli_query($_SESSION['connection'],$q1);
  $gh=mysqli_fetch_array($result);
  $GLOBALS['num'] = mysqli_num_rows($result);

}
function to_time_ago( $time ) { 
      
    // Calculate difference between current 
    // time and given timestamp in seconds 
    $diff = time() - $time; 
      
    if( $diff < 5) {  
        return 'just now posted';  
    } 
      
    $time_rules = array (  
                12 * 30 * 24 * 60 * 60 => 'year', 
                30 * 24 * 60 * 60       => 'month', 
                24 * 60 * 60           => 'day', 
                60 * 60                   => 'hour', 
                60                       => 'minute', 
                1                       => 'second'
    ); 
  if($diff>=5){
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
if(isset($_POST['sub'])){
    $q2="delete from blogs where blogid=$myidofblog";
    $q3="delete from main where blogid=$myidofblog";
    unlink('uploads/'.$blogarray['thumbnail']);
    mysqli_query($_SESSION['connection'],$q2);
    mysqli_query($_SESSION['connection'],$q3);
    header('Location:blogpage.php');


}

$GLOBALS['likerid']=$_COOKIE['userid'];
$userid2=$_COOKIE['userid'];

$query3="update blogs set views='$views' where blogid='$myidofblog'";
$execute=mysqli_query($_SESSION['connection'],$query3);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blogs On Tb</title>
    <meta charset="utf-8"/>
    <meta name="title" content='<?php echo $blogarray['blogtitle'];?>'>
<meta name="description" content='<?php echo substr(strip_tags($blogarray['blogtext']),40); ?>'>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thoughtbitz.ml/Blogs/watchBlog.php?blogid='<?php echo $getblogid;?>'">
<meta property="og:title" content='<?php echo $blogarray['blogtitle']; ?>'>
<meta property="og:description" content='<?php echo substr(strip_tags($blogarray['blogtext']),40); ?>'>
<meta property="og:image" itemprop="image" content="https://www.thoughtbitz.ml/img/favicons.png">


<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.thoughtbitz.ml/Blogs/watchBlog.php?blogid='<?php echo $getblogid;?>'">
<meta property="twitter:title" content='<?php echo $blogarray['blogtitle'];?>'>
<meta property="twitter:description" content='<?php echo substr(strip_tags($blogarray['blogtext']),40); ?>'>
<meta property="twitter:image" content="https://www.thoughtbitz.ml/img/favicons.png">

	<meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="description" content="blogs On TB"> 

    <link rel="icon" href="https://www.thoughtbitz.ml/Blogs/icon-official-favicon.png" type="image/x-icon">
</head>
  
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/all.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Vast+Shadow&display=swap" rel="stylesheet">
 <script async charset="utf-8" src="//cdn.embedly.com/widgets/platform.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
<script>
function liked(x) {
    
  $.ajax(
{

  url:"like.php?blogid="+$(x).attr('id')+"&userid=<?php echo $_COOKIE['userid']?>",

    success:function(data){
    if(JSON.parse(data).number1==1){


       $(x).css('color', 'red');
       $('.likes').html(JSON.parse(data).number2+"Likes");

    }
    else{
       $(x).css('color', 'black');
       if(JSON.parse(data).number2==null){
      
        $('.likes').html(0+"Likes");
       }
       else{
       $('.likes').html(JSON.parse(data).number2+"Likes");
       }
    }
}
}
);
}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<style>
    *{
        margin:0;
        padding:0;
        
    }
    body{
        background:#F5FFFA;
        font-family: 'Roboto Condensed', sans-serif;
    }
    .blink_me {
  animation: blinker 1s linear infinite;
}
   @-webkit-keyframes blinker {
  from { opacity: 1.0;font-size:1rem; }
  to { opacity: 0.0;font-size:1.3rem; }
}

.waitingForConnection {
  -webkit-animation-name: blinker;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: cubic-bezier(.5, 0, 1, 1);
  -webkit-animation-duration: 1.7s;
}
    @media only screen and (min-width:768px){
        .let{
                width: auto;
                height:450px;
        }                              
        .bt{
            font-size:38px;
            word-wrap: break-word;
            font-family: 'Roboto', sans-serif;
            font-weight : bold;
        }  
    }
    @media only screen and (max-width:768px){                              
        .bt{
            font-size:18px;
            word-wrap: break-word;
            font-family: 'Roboto', sans-serif;
            font-weight : bold;
        }  
        .setst{
            padding-top:0px;
        }
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

</style>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark sticky-top bg-dark justify-content-between">
            <a class="navbar-brand" href="#"><div><img class="logo img-fluid" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent" style="margin-right:15rem" >
            <ul class="navbar-nav mr-auto mx-auto apply" >
                <li class="nav-item navs active px-5">
                <a class="nav-link navb text-white" href="../dashboard?userid=<?php echo urlencode(base64_encode("dashboard".$userid."viewposts"));?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white " href="blogpage">blogpage </a>
                </li>
               
            
        </ul>
        
            </div>
        </nav>




<div class="container mb-5">
        <div class="row text-center">
                            <div class="col-12">
                                <p style="font-size:1 rem;word-wrap:break-word" class="text-dark">
                            
                            <?php
                                echo to_time_ago($blogarray['datetime']) ;  
                               
                        ?></p>




                            </div>
            </div>
     <div class="row text-center">
        <div class="col-12" style="background-color:white;border-radius:20px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="h4" style="font-family: 'Yellowtail', cursive;">Posted By:<br></div>
            <div style="font-size:1rem;color:black">
            <?php
                        if(!empty($blogarray['profileimage'])){
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($blogarray['profileimage'] ).'" width="60" height="60" style="border-radius:50%;">';
                        }
                        else{
                               echo  '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTScJ_GgDAewRKGu2-hO6qoPloKSMq-W3zGPQ&usqp=CAU" width="60" height="60" style="border-radius:50%;">';
                        }

            ?>
            <?php echo '<a href="../user/'.substr($blogarray['email'], 0, strpos($blogarray['email'], '@')).'" class="text-decoration-none"><h2>'.$blogarray['username'].'</h2></a>';?></div>
                    <div style="justify-content-between:space-around;">
                        <div><?
                        check($blogarray['userid'],$myidofblog);
                        if($num==0){
                            echo '<div ><i onclick="liked(this)" class="fa fa-heart" data-toggle="tooltip" id="'.$myidofblog.'" title="Like" style="font-size:1rem"></i></div>';
                        }
                        else{
                                echo 
                        '<div ><i style="color:red;font-size:1rem" data-toggle="tooltip" title="DisLike" onclick="liked(this)" class="fa fa-heart" id="'.$myidofblog.'"></i></div>';
                        }
                        echo '<div class="likes" >&nbsp&nbsp'.$likes.'&nbsplikes</div>';
                        ?>
                        </div>
                
                        <div><i class="fa fa-eye"></i><? echo $blogarray['views'];?>&nbspviews</div>
                    </div>
            
           
     </div>
     </div><br><br>
   <div class="row">
        <div class="col-12" style="background-color:white;border-radius:20px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div  class="bt text-center">#BLOG:<?php echo $blogarray['blogtitle'];?></div><br>
                        <div class="text-center blog-img">
                        <?php 
                                
                                echo '<style>@media only screen and (max-width:768px){
                                                .let{
                                                    width:auto;
                                                    height:150px;
                                                }
                                                body{
                                                    font-size:10px;
                                                }
                                                .setst{
                                                    padding-top:0px;
                                                    }
                                            }
                                            .col-sm-3{
                                                width:100%;
                                            }

                                    </style><img src="uploads/'.$blogarray['thumbnail'].'" class="let" >';
                        ?>
                        <h1  style="font-family: 'Roboto', sans-serif;" class="fontfg "> #Description:</h1>
                        <div style="font-size:1.3rem;word-wrap: break-word ;padding:4rem;"><?php echo $blogarray['blogtext'];?><br><br><br></div>
                        </div>


            
        </div>
  
   </div>
   <?php
    if(  $userid1==$real_userid && $check!=0){
    echo '<div class="row p-2" style="justify-content:space-around;">
                                <button class="btn btn-primary col-lg-5 m-2" id="mybutton" data-toggle="modal" data-target="#exampleModal">delete</button>
                        
                                <a class="btn btn-primary col-lg-5 m-2" href="./update.php?userid='.urlencode(base64_encode("update".$userid1)).' && blogid='.urlencode(base64_encode("update".$myidofblog)).'">update</a>
                        </div>';
    }
    ?>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form  action="" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DO you really want to delete this post?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        IF YOU WANT TO DELETE CLICK ON DELETE OTHERWISE CLOSE
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="delete" name="sub"></input>
      </div>
    </from>

    </div>
  </div>
</div>

<!--Modal: modalCookie-->
    <div class="modal top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
        <!--Body-->
        <div class="modal-body">
            <div class="row d-flex justify-content-center align-items-center">

            <p class="pt-3 pr-2">We use cookies to improve your website experience</p>
            <button class="btn btn-outline-primary waves-effect" data-dismiss="modal" onclick="dismissm()">Ok, thanks</button>
            </div>
        </div>
        </div>
        <!--/.Content-->
    </div>
</div>
</body>
<script>
var modal1=document.getElementById("modalCookie1");
var urlcontent=$("oembed").attr("url");
$('oembed').replaceWith('<iframe width="100%" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>' + $('oembed').html() +'</iframe>');
$("iframe").attr("src",urlcontent);
/**var ids=youTubeGetID(urlcontent);*/
/**function youTubeGetID(url){
  var ID = '';
  url = url.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
  if(url[2] !== undefined) {
    ID = url[2].split(/[^0-9a-z_\-]/i);
    ID = ID[0];
  }
  else {
    ID = url;
  }
    return ID;
}*/
/**$("iframe").attr("src","https://www.youtube.com/embed/"+ids);*/
</script>
</html>

