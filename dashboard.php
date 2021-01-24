<!DOCTYPE html>
<html>
<?php
 include 'API/start.php';
   include 'database.php';
$userid='';
if(isset($_COOKIE['userid'])){
$userid=$_COOKIE['userid'];
$cvb=new check;
$fgh=$cvb->check_login($userid,$_SESSION['connection']);
if($fgh!=1){
         header('Location:https://www.thoughtbitz.ml/loginwork/Thoughtbitz-login');
              exit();
}
else{
    echo "<script>if(!!window.performance && window.performance.navigation.type===2){
      console.log('Reloading');
      window.location.reload();
    }</script>";
} 
}
else{
 $myid=$_GET['userid'];
 $decoded=base64_decode(urldecode($myid));
 $userid=trim($decoded,"dashboard");
 
$cvb=new check;
echo $userid;
$fgh=$cvb->check_login($userid,$_SESSION['connection']);
if($fgh!=1){
        header('Location:https://www.thoughtbitz.ml/loginwork/Thoughtbitz-login');
        exit();
}
else{
    
    echo "<script>if(!!window.performance && window.performance.navigation.type===2){
      console.log('Reloading');
      window.location.reload();
    }</script>";
} 
}
?>
<head>

<title>Main Dashboard</title>
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
  <link href="//s.w.org/wp-includes/css/dashicons.min.css?20181204" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
  </script>
     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        
  <style>
  *{
      margin:0;
      padding:0;
  }
  .features .col-5 li {
	margin-bottom:15px;
}
.featured {
	background: #fffbcc;
	border: 1px solid #e6db55;
	padding: 11px 11px 16px;
	margin: 32px 0;
	overflow: auto;
	/*width: 670px;*/
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
      color:black;
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

@media screen and (max-width: 1200px){
    .nav-item,.nav-item p{
         font-size:10px;
    }

    .h4{
        font-size:19px;
    }
}
.box-s{
    box-shadow:0 0 10px rgba(0,0,0,0.4);
    font-size:1.6rem;
}


.dps{
    display:block;
    color:black;
    
    font-size:1.3rem;
    box-sizing:border-box;
    width:100%;
    border-radius:5%;
}
.dps:hover{
    background:black;

    color:white;
}
 @media only screen and (max-width:992px){
   
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
  .sds{
      width:100%;
  }
</style>
</head>
<body>
    <div class="overlay"></div>
  <nav class="navbar navbar-expand-lg navbar  sticky-top flex-md-nowrap  justify-content-between shadow " style="background-color:#20B2AA;">
            <a class="navbar-brand" href="#"><div><img class="logo img-fluid" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class=" logo-mark">ThoughtBitz</div></a>
    <button class="navbar-toggler  text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    Menu<span class="navbar-toggler-icon" style="color:white"><i class="fa fa-user-circle-o"></i></span>

  </button>                    
             
        </nav>
<div class="container-fluid">
  <div class="row">  
    <nav  class="col-md-3 col-lg-2 d-md-block sidebar  navbar-collapse collapse text-dark" id="navbarSupportedContent" style="background:#F0F8FF;">
      <div class="sidebar-sticky w-100">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link dps" href="./">
              <span data-feather="home"></span>
              <i class="fa fa-home" aria-hidden="true" style="color:#006666;font-size:0.9rem"></i><b>Home</b>
            </a>
          </li><br>
          <li class="nav-item">
            <a class="nav-link dps" href="../course/course.php?course=<?php echo urlencode(base64_encode("course".$userid));?>" style="font-size:1rem">
              <span></span>
              <i class="fa fa-thumb-tack" aria-hidden="true" style="color:#ff9900;font-size:0.9rem"></i><b style="font-size:1.4rem">Coding</b>
            </a>
          </li><br>
          <li class="nav-item">
            <a class="nav-link dps" href="../Blogs/blogpage">
              <i class="fa fa-pencil" aria-hidden="true" style="color:#006600;font-size:0.7rem"></i><b>Blogging</b>
            </a>
          </li><br>
          <li class="nav-item">
            <a class="nav-link  dps" href="../about/about_us">
              <span></span>
              <i class="fa fa-users" aria-hidden="true" style="color:#990000;font-size:0.9rem"></i><b>About&nbspUs</b>
            </a>
          </li>
          
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <!--<h1 class="h3"><i class="fa fa-dashcube" aria-hidden="true"></i>ashboard</h1>-->
        <br>
        <div class="container-fluid">
            <div class="row">
                    <div class="offset-9 col-3">
                            <a href="../loginwork/action.php?event=logout" class="text-decoration-none">Logout<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiCZjG7zAot5pYzM4hLs8LgnW3NCF2mX5qKw&usqp=CAU" height="50" width="50"></a>
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-sm-5  card box-s pt-1">
                            <div class="card-body row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsezmyXrVYbuEKJAyfdLbYsMp0qCihp2Evuw&usqp=CAU" height="100%" style="border-radius:16px" class="col-4"><div class="card-text col-8">Blogs&nbsp22 posts</div></div>
                    </div>
                    
                    <div class="col-sm-5  offset-sm-2 card box-s pt-1">
                             <div class="card-body row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgP7dLVqaDV6Wek0uhBCVwKz5C-MmbGmdthA&usqp=CAU" height="100%" style="border-radius:16px" class="col-4"><div class="card-text col-8">Courses</div></div>
                    </div>
            </div>
            <br>
            <div class="row">
                  <div class="col-sm-5 offset-sm-3 card text-center box-s">
                            <div class="card-body row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpXZeqvC__DlfoHv1mLIUYBooHPv5W-FNWvg&usqp=CAU" height="100%" style="border-radius:16px" class="col-4"><div class="card-text col-8">Trends and popular articles</div></div>
                    </div>  
            </div>
            <br>
            <div class="row text-center">
                     <form class="form-inline ml-auto  w-100 pl-2" action="./Blogs/searchresult.php" >
                        <input class="form-control mr-sm-2" id="search_text" type="text" placeholder="Search Blogs,Trends and People" name="query" autocomplete="off" style="color:blue" size="70">
                        <button class="btn my-1 my-sm-0 pl-2" type="submit"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQppxb2Um1TfmH8zVvSedZ9C8GJnPVhiiUDhQ&usqp=CAU" height="45" height="45"></button>
                    </form>
            </div>
            <div class="row">
                    
            </div>
            <br><br>
            <div class="container">
                                <section class="features text-center">
                    <h4><q>The whole of life, from the moment you are born to the moment you die, is a process of learning.</q>- Jiddu Krishnamurti</h4>
                    <b>
                    <h2>Powerful Features</h2>
                   
                    <ul class="row col-xs-6">
                        <li class="col-md-2" style="list-style-type:none"></li>                    
                        <li class="col-md-2" style="list-style-type:none">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp0HB1XJzjkwbbEkDpQZUNybbytj79ojG9bQ&usqp=CAU" class="card-img" height="100">
                            <div class="card-body">
                            <b>Customizable</b>
                            </div>
                        </li>
                        <li class="col-md-2" style="list-style-type:none">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hOqc458mfJaq7-YCaZ2T7ZF8QLBKilXfLw&usqp=CAU" height="100" class="card-img">
                            <div class="card-body">
                            <b>SEO Friendly</b>
                            </div>
                        </li>
                        <li class="col-md-2" style="list-style-type:none">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTEQQDtEoYVsUIH5hKQzZOuUv_u8w2-V_vVA&usqp=CAU" height="100" class="card-img">
                            <div class="card-body">
                            <b>
                            Responsive Mobile Sites
                            </b>
                            </div>
                        </li>
                        <li class="col-md-2" style="list-style-type:none">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDP7gQS5cQYs1BWfIVdbonSsz6u9yOkS3lAw&usqp=CAU" height="100" class="card-img">
                            <div class="card-body">
                            <b>High Performance</b>
                            </div>
                        </li>
                    </ul>
                    
                    <ul class="row col-xs-6">
                        <li class="col-md-2" style="list-style-type:none"></li>      
                        <li class="col-md-2" style="list-style-type:none">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKmh0xRrjqAU27-tb9wZ6-os2240cgTYzoDA&usqp=CAU" height="100" class="card-img">
                            <div class="card-body">
                                <b>Fully managed content</b>
                            </div>
                        </li>
                        <li class="col-md-2" style="list-style-type:none">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXNgxn_9zl-PGjzZOYKlIUs8_hgkzo4nhDBQ&usqp=CAU" height="100" class="card-img">

                                <div class="card-body">
                                <b>High Security</b>
                                </div>
                        </li>
                        <li class="col-md-2" style="list-style-type:none">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf4J2z29phqqVBCi0CLLRFZ6LDFaN2YmX-KA&usqp=CAU" height="100" class="card-img">
                            <div class="card-body">
                            <b>
                            Powerful media</b>
                            </div>
                        </li>
                        <li class="col-md-2" style="list-style-type:none">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vEd_bxvVtgmg9PKuAM2vWYS6CRf7KmwvGg&usqp=CAU" height="100" class="card-img">
                            <div class="card-body">
                            <b>Easy and Accessible</b>
                            </div>
                        </li>
                    </ul>
                   
                </section>
            </div>
            <div class="row">
                <div class="card" style="width:100%;">
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKIbfPJ3tOIrtUIn0uxOg7ZmYTJuiz3jhlZQ&usqp=CAU" alt="C programming"  height="100%">
                        </div>
                        <div class="col-sm-7 bg-light">
                            <div class="card-body">
                            <h5 class="card-title">Learn C programming</h5>
                            <p class="card-text"><b>“Talk is cheap. Show me the code.”
― Linus Torvalds</b></p>
                            <a href="#" class="btn"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzHp26vA83zAX0dQtoAkgbYXRq9N2FEFbAsQ&usqp=CAU" height="65" width="130"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="card" style="width:100%;">
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                                <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYBiWDVOuEifIY3_PPczhoq-OppHTJcLKQog&usqp=CAU" alt="CkEditor" height="100%">
                        </div>
                        <div class="col-sm-7 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Make Your First Blog On ThoughtBitz</h5>
                                <p class="card-text"><b>"Do what you Love and Love what You Do"</b></p>
                                <a href="https://www.thoughtbitz.ml/Blogs/createBlog" class="btn"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ8iwAsM6XlxzTp8UWV4v0EA27ijEhd8425A&usqp=CAU" height="65" width="130"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
      </div>
         
        </div>
        
        
    </main>
    
      
    
  </div>
   <div class="row   footer p-3 pl-5 text-center" style="background-color:#F0F8FF; color: #707070;">
         <div class="col-lg-5 text-center col-xl-5 col-md-2">
            <div><img class="logo img-fluid" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>	
              
        </div>
        <div class="footfont col-lg-2  col-xl-2 col-md-2 text-center">
            <div class="row text-center">
            <div class="footfont1 h4 text-center mx-auto">Services</div>
            </div>
            <div class="row text-center">
            <div class="p text-center mx-auto">Course</div>
            </div>
            <div class="row text-center">
            <div class="p text-center mx-auto">Dashboard</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Blog</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Help</div>
            </div>
                            
        </div>
        <div class="footfont col-lg-2  col-xl-2 col-md-2 text-center">
         <div class="row">
            <div class="footfont1 h4 mx-auto">Support</div>
            </div>
            <div class="row">
            <div class="p mx-auto">About Us</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Terms</div>
            </div>
           
              
        </div>
        <div class="footfont col-lg-2 col-xl-2 col-md-2 text-center">
            <div class="row">
            <div class="footfont1 h4 mx-auto">Connect With Us</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Facebook</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Twitter</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Instagram</div>
            </div>
            <div class="row">
            <div class="p mx-auto">LinkedIn</div>
            </div>
            <div class="row">
            <div class="p mx-auto">Telegram</div>
            </div>
              
        </div>
</div>

   

</div>
<div class="container">
     <div class=" row pl-3 ">
						<div class="col-sm-12 text-center ">
							<div class="copyright-text mx-auto">
								<p class="mx-auto">CopyRight © 2020 ThoughtBitz</p>
							</div>
						</div> <!-- End Col -->
						
	</div>
</div>
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
</style>
<style>
.row .p:hover{
    color:#274abb;
    cursor:pointer;

}
.social-icons{
    text-align:center;
    margin: auto;
    margin-left:50px;
    padding: auto;
    font-size : 1rem;
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
 
/*
 * Sidebar
 */

.footer{
   // position:absolute;
   height:60vh;
}
.footfont{
    font-size:1.5rem;

}
.footfont1{
    font-size:1.6rem;
    font-family: 'Roboto', sans-serif;
    color:black;
}
@media only screen and (min-width: 600px) {
    .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 100; /* Behind the navbar */
    padding: 48px 0 0; /* Height of navbar */
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

}
@media only screen and (max-width: 1000px){
    .social-icons{
         margin-left:0px;
    }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar ul{
    margin:2rem;
}
 
.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

</style>
<script>

</script>
</body>
</html>
