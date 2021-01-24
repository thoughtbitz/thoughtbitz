<html>


<head><title>about_us</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">


<!-- Bootstrap's JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../b/bootstrap.min.js"></script>
<script src="../b/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/all.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Vast+Shadow&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!------ Include the above in your HEAD tag ---------->
<?php
 include '../API/start.php';
   include '../database.php';
$userid='';

 $userid=$_COOKIE['userid'];
 
 




?>
<style>
 .paddingTB60 {
    padding-top:60px;
    padding-bottom:60px;
}
.bgcolor-skyblue {
    background:#eaf0f9;
}
 
 .image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://miro.medium.com/max/3000/1*MI686k5sDQrISBM6L8pf5A.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    padding-top: 110px;
    padding-bottom:110px;
 }
 
  .image-aboutus-sm-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://images.pexels.com/photos/631008/pexels-photo-631008.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    padding-top: 30px;
    padding-bottom:30px;
 }
.lg-text {
    font-size:52px;
    font-weight: 600;
    text-transform: none;
    color:#fff;
}
.image-aboutus-para {
    color:#fff;
}

/************************* */
.plan {
    background: #f9f9f9;
    padding: 50px 30px;
    margin-bottom: 30px;
}
.plan-header h4 {
    padding-bottom: 8px;
    text-transform: uppercase;
    color: #333;
    font-weight: 600;
}
.plan-header {
    font-weight: 700;
}
.plan-header span {
        color: #fe4819;
        font-size: 40px;
}
.plan li {
    padding-bottom: 15px;
}
.plan ul {
    padding-left: 0;
    margin-bottom: 15px;
    list-style: none;
}
.plan-header p {
    padding-header: 12px;
    padding-bottom: 15px;
}

.col-md-3,.col-md-4 ,.col-md-2{
    position: relative;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
}

.bg-pink {
    background:#f0f0f0;
}
.bg-blue {
    background:#d6d6d6;
    color:#000;
}
 .padding35 {
    padding: 35px 0 35px;
}


/* Feature-CSS */

.icon {
    color : #fff;
    padding:15px;
    background:#323232 ;
    font-size:50px;
    border-radius:90px;
    border:10px solid #323232 ;
    
}
.feature-box {
    text-align: center;
    padding: 20px;
    transition: .5s;
    margin-bottom: 30px;
    border: 1px solid #e8e8e8;
}
.feature-box:hover {
   
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.feature-box h4 {
    font-size: 20px;
    font-weight: 600;
    margin: 25px 0 15px;
}

/* Site Heading */
.site-heading h3{
    font-size : 40px;
    margin-bottom: 10px;
    font-weight: 600;
}
.border {
    background: #e8e8e8 ;
    height: 1px;
    width: 40%;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 45px;
    float:left;
}

/* padding-margin */
.paddingTB60 {
    padding-top:60px;
    padding-bottom:60px;
}


/* Carousel banner */
/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color:#555;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
 
}
.carousel-caption {
    margin-bottom:30px;
}
.carousel-caption h1 {
    margin-bottom:15px;
    font-size:42px;
    font-weight:700px;
}
.carousel-caption p {
    margin-bottom:20px;
    font-size:16px;
    font-weight:400px;
}

/* Footer */
.footer {
    position: relative;
    background-color: #fff;
    color: #707070;
    padding: 55px 0 40px;
}
.footer h5 {
    font-size: 18px;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
    color: #707070;
    position: relative;
    padding-bottom: 16px;
}
.footer h5:after {
    content: '';
    display: block;
    margin: 5px 0 0;
    width: 40%;
    height: 1px;
    background-color: #fff;
}
.footer ul {
    list-style: none;
    line-height: 2.2em;
    padding-left:0px;
}
.footer ul a {
    color:#707070;;
}
.footer ul a:hover {
    color:#274abb;;
    text-decoration:none;
}
/*footer bottom */
.footer-bottom {
    padding-top: 5px;
    padding-bottom: 15px;
    border-top: 1px solid rgba(0,0,0,0.09);
    background: #fff;
    
}
.copyright-text p {
    color: #707070;
    margin-top: 18px;
    margin-bottom: 0;
    font-size:12px;
}

/* Social Icons */

.social-icons{
    
    margin: 0;
    padding: 0;
    font-size : 10px;
}

.social {
    margin:7px 7px 7px 0px;
    
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
 
 /* CTA CSS */
 .cta-padding35 {
    padding: 35px 0 35px;
    background-color: #b40028;
    color:#fff;
}
/* Buttons */
.site-btn {
    font-size: 14px;
    padding: 13px 30px;
    border-radius: 5px;
    border: 1px solid #b40028 ;
    min-width: 200px;
    display: inline-block;
    text-align: center;
    position: relative;
    z-index: 1;
    color: #b40028 ;
    background-color:transparent;
    transition: all .25s ease-in-out;
    margin: 10px 0px 10px 0px;
    
}
.site-btn:hover {
    background: #b40028 ;
    border: 1px solid #fff;
    font-weight:700px;
    
    
}
 


/* Navigation */
.navbar-default {
  background-color: #011034;
  border-color: #011034;
  padding: 10px 0px 10px 0;
  letter-spacing:1px;
  font-weight:800;
  text-transform: uppercase;
      webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    -ms-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    -o-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
}
.navbar-default {
  background-color: #011034;
  border-color: #011034;
}
.navbar-default .navbar-brand {
  color: #ffffff;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #b40028;
}
.navbar-default .navbar-text {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #b40028;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #011034;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #b40028;
  background-color: #011034;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
  background-color: #011034;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #b40028;
  background-color: #011034;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #b40028;
  background-color: #011034;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #b40028;
  background-color: #011034;
}
.navbar-default .navbar-toggle {
  border-color: #011034;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #011034;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ffffff;
}
.navbar-default .navbar-link {
  color: #ffffff;
}
.navbar-default .navbar-link:hover {
  color: #b40028;
}
.hello{
    display:flex; 
    justify-content:space-around;

}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #b40028;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #b40028;
    background-color: #011034;
  }
       .hello{
    display:flex;
    flex-direction:column; 
    justify-content:center;
    margin-left:14rem;


        }
}
@media(max-width: 376px){
    .hello{
    display:flex;
    flex-direction:column; 
    justify-content:center;
    margin-left:10rem;


        }

}
@media(max-width: 320px){
    .hello{
    display:flex;
    flex-direction:column; 
    justify-content:center;
    margin-left:8rem;


        }

}

.logo{
      border-radius:50%;
      height:50px;
      padding-bottom:1rem;
     
      box-shadow:0 0 10px rgba(0,0,0,0.4);
    }
    .logo-mark{
        margin-top:0.5rem;
    }
    .flip-card {
  position: relative;
  background-color: transparent;
  width: 12rem;
  height: 12rem;
  perspective: 1000px;
  align:center;
  padding-bottom:2rem;
  margin-bottom:2rem;
  margin-top:2rem;
  
  
}
.card1 {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .card1 {
  transform: rotateY(180deg);
}
.front , .back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.front {
  background-color: #bbb;
 color: black;
}

.back {
    width:12rem;
    height:12rem;

  background-color: #EE82EE;
  color: white;
  transform: rotateY(180deg);
}
.back p{
  padding-bottom:4rem;
}
.timepass{

    width:12rem;
    height:12rem;
    
}
</style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " ><div><img class="logo img-fluid" style="position:absolute;" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div><div class="logo-mark" style=" position:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThoughtBitz</div></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link" href="https://thoughtbitz.ml/">Home</a></li>
       
        
        <li class="nav-item"><a  class="nav-link" href="../course/course.php?course=<?php echo urlencode(base64_encode("course".$userid));?>">coder's pack</a></li>
        <li class="nav-item"><a class="nav-link" href="../Blogs/blogpage.php?welcome=<?php echo urlencode(base64_encode("welcome".$userid));?>">Blogging</a></li>
       
        
       
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
 </div><!-- /.container-collapse -->
  </nav>
<div class="image-aboutus-banner"style="margin-top:70px">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
         <h1 class="lg-text">About Us</h1>
         <p class="image-aboutus-para">Our main purpose is to give free platform for Blogging and learning  </p>
       </div>
    </div>
</div>
</div>
<div class="container paddingTB60">
	<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12 text-center">

                 <hr>

                <h2 >About Us</h2>

                <hr>

                <!-- Preview Image -->
                
                <hr>

                <!-- Post Content -->
                <p class="lead">We provide common platform for the blogger they can upadate or delete blog also we provide tranding and popular blog you can read , like and share <br>
                We provide common platform code'pack in which you can learn , enroll and get certificate for the specific course <br>
                Also you can view your profile and edit by requirements</p>

                <hr>

               
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            

        </div>
        
</div>
  
  
<div class="cta-sektion cta-padding35">
    
                
            <div class="container  ">
                        <div class="h2 text-center " >Team Of ThoughtBitz</div>
                             <div class="hello"  >
                                                            <div class="flip-card">
                                                            <div class="card1">
                                                                <div class="front">
                                                                    <img src="https://static.toiimg.com/photo/72975551.cms" alt="Avatar" class="timepass">
                                                                </div>
                                                                <div class="back">
                                                                    <h1>
                                                                    Darsh Jashani
                                                                        
                                                                    </h1>
                                                                    <p>
                                                                     
                                                                    </p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                                    <div class="flip-card">
                                                                        <div class="card1">
                                                                            <div class="front">
                                                                                <img src="https://static.toiimg.com/photo/72975551.cms" alt="Avatar" class="timepass">
                                                                            </div>
                                                                            <div class="back">
                                                                                <h1>
                                                                                Deep shah
                                                                                    
                                                                                </h1>
                                                                                <p>
                                                                                
                                                                                </p>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    <div class="flip-card">
                                                                        <div class="card1">
                                                                            <div class="front">
                                                                                <img src="https://static.toiimg.com/photo/72975551.cms" alt="Avatar" class="timepass">
                                                                            </div>
                                                                            <div class="back">
                                                                                <h1>
                                                                                Monil Baxi
                                                                                    
                                                                                </h1>
                                                                                <p>
                                                                               
                                                                                </p>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                            <div class="flip-card" >
                                                    <div class="card1">
                                                        <div class="front">
                                                            <img src="https://static.toiimg.com/photo/72975551.cms" alt="Avatar" class="timepass">
                                                        </div>
                                                        <div class="back">
                                                            <h1>
                                                            Hetvi Shukla
                                                                
                                                            </h1>
                                                            <p>
                                                            
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                    
             
             
                            </div>
                </div>
                   
           
           
       
</div>
<div class="footer-section">
    <div class="footer">
	<div class="container">
		<div class="col-md-4 footer-one">
			<h5>About Us </h5>
		    <p>provide a common platform for blogging and learning </p>
		    	<div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>	
		</div>
		<div class="col-md-3 footer-two">
		    <h5>Services </h5>
		    <ul>
									<li><a href="maintenance.html">Course</a></li>
									<li><a href="contact.html">Dashboard</a></li>
									<li><a href="about.html">Blog</a></li>
									<li><a href="about.html">help</a></li>
									
								</ul>
		</div>
		<div class="col-md-3 footer-three">
		    <h5>Support </h5>
		    <ul>
									<li><a href="maintenance.html">About us </a></li>
									<li><a href="contact.html">terms</a></li>
									
								</ul>
		</div>
		<div class="col-md-2 footer-four">
		    <h5>Connect With Us</h5>
		    <ul>
									<li><a href="maintenance.html">Facebook</a></li>
									<li><a href="contact.html">Twitter</a></li>
									<li><a href="about.html">Instagram</a></li>
									<li><a href="about.html">LinkedIn</a></li>
									<li><a href="about.html">Telegram</a></li>
								</ul>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
    <div class="footer-bottom">
        <div class="container">
					<div class="row">
						<div class="col-sm-12 text-center ">
							<div class="copyright-text">
								<p>CopyRight © 2020 ThoughtBitz</p>
							</div>
						</div> <!-- End Col -->
						
					</div>
				</div>
    </div>
</div>  

</body>

</html>