<!DOCTYPE html>
<html>
<head>
	<title>SEARCH-thoughtbitz</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  <link rel="stylsheet" href="../b/bootstrap.css">
  <script src="../b/bootstrap.js"></script>
  <link rel="stylesheet" href="../b/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="../b/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Vast+Shadow&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Texturina:wght@300&display=swap" rel="stylesheet">
    <link rel="stylsheet" href="../b/bootstrap.css">
  <script src="../b/bootstrap.js"></script>
  <link rel="stylesheet" href="../b/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="../b/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .logo{
      border-radius:50%;
      height:50px;
      width:50px;
      margin-bottom:0.5rem;
      box-shadow:0 0 10px rgba(255,255,255,0.4);
    }
 @media (min-width: 1024px) and (max-width: 1280px){ 
            .dps{ 
               position:fixed; 
            }
            .dps2{
                left:25%;
            } 
            .dps3{
                left:65%;
                position:fixed;
            }
        } 
          
        /* Media Query for Large screens */ 
        @media (min-width: 1281px) { 
            .dps{ 
               position:fixed;
            } 
            .dps2{
                left:25%;
            } 
            .dps3{
                left:65%;
                position:fixed;
            }
        }
</style>
</head>
<body>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
      
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" class="logo img-fluid">&nbsp;&nbsp;<strong>ThoughtBitz</strong></a>
  
  <form role="form text-center " id="form-buscar" autocomplete="off" style="width:100%;margin-top:1rem;">
<div class="form-group">
<div class="input-group">
<input id="1" class="form-control" type="text" name="query" placeholder="Search..." required/>
<span class="input-group-btn">
<button class="btn btn-success" type="submit">
<i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
</button>
</span>
</div>
</div>
</form>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link active" href="../Blogs/blogpage"><strong>back</strong></a>
    </li>
  </ul>
</nav>


<div class="container-fluid  overflow-hidden" >
    <div class="row  text-center">
        <div class="col-sm-12  text-center text-primary" style="color:black">
            <ul class="nav nav-tabs  nav-justified text-center mt-5"  >
                <li class="nav-item">
                   <a class="btn btn-success text-white" href="https://www.thoughtbitz.ml/Blogs/searchresult.php?query=music">music</a>
                </li>
               
                <li class="nav-item">
                    <a class="btn btn-success text-white" href="https://www.thoughtbitz.ml/Blogs/searchresult.php?query=sports">sports</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success text-white" href="https://www.thoughtbitz.ml/Blogs/searchresult.php?query=Information Technology">IT & CSE</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success text-white mt-1">Food</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success text-white mt-1" href="https://www.thoughtbitz.ml/Blogs/searchresult.php?query=Entertainment">Entertainment</a>
                </li>
            
            </ul>
        </div>
    </div>     
</div> 











<div class="container " >




<?php
 include '../API/start.php';
  include '../database.php';
include '../database.php';
$output = '';
if(isset($_COOKIE['userid'])){
$userid=$_COOKIE['userid'];
$vari1=1;
$cvb=new check;
$fgh=$cvb->check_login($userid,$_SESSION['connection']);
        if($fgh!=1){
            $vari1=0;
            $userid=NULL;

         
        }
}
mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
if(isset($_GET["query"]))
{       echo '<div class="h3 text-center " style="font-family: "Teko", sans-serif;align:center;border-radius:10px 10px;">You Searched for <span style="color:red">'.$_GET['query'].'</span></div>';
	$search = mysqli_real_escape_string($_SESSION['connection'], $_GET["query"]);
	$query = "SELECT distinct a.blogid,a.userid1,a.blogtitle,a.datetime,a.categoryname,a.thumbnail,a.blogtext,b.username,b.userid FROM blogs a inner join user b on a.userid1=b.userid where blogtitle LIKE '%".$search."%'
    OR categoryname LIKE '%".$search."%'
    OR b.username LIKE '%".$search."%'
	";

}
$started = microtime(true);
$result = mysqli_query($_SESSION['connection'], $query);
$end = microtime(true);
$difference = $end - $started;
$queryTime = number_format($difference, 10);
if(mysqli_num_rows($result) > 0)
{
    if(mysqli_num_rows($result)==1){
        
        echo '<div class="h3 text-center " style="font-family: "Teko", sans-serif;align:center;border-radius:10px 10px;"> Total result'.mysqli_num_rows($result).' </div>';
    }
    else{
        echo '<div class="h3 text-center " style="font-family: "Teko", sans-serif;align:center;border-radius:10px 10px;">Total results '.mysqli_num_rows($result).' </div>';
    }
    echo '<br>';
    echo '<br>';
    echo '<div class="row">';
	while($row1 = mysqli_fetch_array($result))
	{

		    $output='            
               <div class="col-md-4" style="padding-top:3rem">
                    <div class="card mb-4 shadow-sm" style="height:100%;border-radius:15px">
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
                             <p class="card-text text-muted" style="font-size:0.8rem">posted on&nbsp'.$row1['datetime'].'</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                
                                <a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDNjjW3kRo2U4VTaMTntt1o1kGEa3bWP6Y7Q&usqp=CAU" height="20" width="20"></a><a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi8Ph1Ga9ReNqmOg3In7GUajmFeHcBp4LC8g&usqp=CAU" height="20" width="20"></a><a href="https://web.whatsapp.com/send?text='.$url.'" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-U_6gwWityJAnciueDBp_AT5P7kzLTJOHdw&usqp=CAU" height="20" width="20" style="border-radius:40%"></a>
                                </div>
                                <small class="text-white bg-dark" style="border-radius:5px;padding-left:1px">'.$row1['views'].'&nbspVisits</small>
                            </div>
                        </div>
                    </div>
                </div>';
              

               echo $output;
	}
    
}
else
{
	echo '<div class="h1">Oops!!No results found</div>';
}
?>


</div>
</div>
</body>
</html>



 