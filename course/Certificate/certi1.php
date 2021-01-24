<html>
<?php
    include '../../database.php';
    
    $con=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$con){
      echo" connection unsuccessful";
    }
    $userid = $_COOKIE['userid'];
  
    $lid = 1;
    $q = "select username from user where userid = $userid";
    $result = mysqli_query($_SESSION['connection'],$q);
    $row = mysqli_fetch_array($result);
?>
<head><title>Certificate</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
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
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark sticky-top bg-dark justify-content-between">
            <a class="navbar-brand" href="#"><div><img class="logo img-fluid" src="/img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mx-auto apply">
                <li class="nav-item navs active px-5">
                <a class="nav-link navb text-white" href="https://thoughtbitz.ml/">Home <span class="sr-only">(current)</span></a>
               
            
        </ul>
        <ul class="list-unstyled list-inline text-center py-2 text-white">
                    <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                    </li>
                    <li class="list-inline-item">
                    <a href="/loginwork/signup" class="btn btn-danger btn-rounded text-white">Sign up!</a>
                    </li>
                </ul>
        
            </div>
        </nav>
<nav>
<div class="container text-center">
<img class="img-thumbnail" src= "certi.php?userid=<?php echo $row['username'];?> && coursename=Thoughtbitz Java Course&&mode=0" >
</div>
</body>
</html>