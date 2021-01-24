
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
    <meta name="description" content="Thoughtbitz aims to provide common platform to writers,practitioner and learners..visit the website to know more about it">
    <meta name="keywords" content="ThoughtBitz,thoughtbitz,india,thoughts">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
    include '../database.php';
    $con=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$con){
      echo" connection unsuccessful";
    }
    $userid = $_COOKIE['userid'];
    $lid  = 2;
    $q=" select * from c_course where uid = $userid and lid=$lid";
    $result = mysqli_query($_SESSION['connection'],$q);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($num == 0){
        $q1 = "insert into c_course(uid,lid) values ($userid,$lid)";
        $result1 = mysqli_query($_SESSION['connection'],$q1);
        $row = mysqli_fetch_assoc($result1);
    }
    $check  = array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
    for($i=1;$i<=$row['percentage'];$i++){
        $check[$i] = 1;
        //echo $check[$i];
    }
    $lid = urlencode(base64_encode("dashboard"."2"."viewposts"));
    $id = array('null','c1','c2','c3','c4','c5','c6','c7','c8','c9','c10','c11','c12','c13','c14','c15','c16');
    function lock($cn){
      echo "<script> var cn = '$cn' ;</script>";
      //$a ='c';
      $b = trim($cn,'ac');
      if($GLOBALS['check'][$b] == 0){
          $b = $b-1;
          if($GLOBALS['check'][$b] != 1)
              echo'<i style="font-size: 2rem; " class="fa fa-lock " aria-hidden="true" id="l1" ></i>';  
          else{
              
              echo'<i style="font-size: 2rem; visibility: hidden" class="fa fa-lock " aria-hidden="true" id="l1" ></i>';  
              echo '<script>document.getElementById(cn).style.pointerEvents = "auto";</script>';
            }
      }
      else{
         echo '<i  style="font-size: 2rem;color: darkgreen;" class="fa fa-check-square-o" aria-hidden="false" id="l2"></i>';
         echo '<script>document.getElementById(cn).style.pointerEvents = "auto";</script>';

      }
    }
    
?>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  /*background-color:  #004d99;*/
  background-color:#E6E6FA;
  width: 100%;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

.q1,.q2{
    text-align: justify;
    text-align-last: left;
  }

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .card{
    text-align: center;
  }
  h1{
    font-size: 29px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
  padding: 16px;
  text-align: left;
    background-image: url('https://cdn.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-1.jpg');
  background-size: cover;
  color: black;
  border-top:5px solid  #002966 ;
  font-family: 'Poppins', sans-serif;
  font-size: 10px;
}
.card:hover{
  transform: scale(1.1);
  cursor: pointer;
}
i{
  color: white;
}
.th{
     top: 0;
        left: 0;
  }
 #circlebar{
        margin-top: 180px;
        text-align: center;
        font-family: tahoma;

      }
      #circlebar.round{
        min-height: 225px;
        margin-top: 30px;
        position: absolute;
        margin-bottom: 20px;




      }
      #circlebar.round strong{
        position: absolute;
        top: 50px;
        left: 50px;
        margin-top: -50px;
        transform: translate(-50%);
        font-size: 40px;
        color:black;
        font-weight: 100;


      }
                #circlebar span{
                  display: block;
              color: #999;
                font-size: 7px;
              margin-top: 10px;

            }
          #circlebar span i{
            color:#ff5c5c;
            font-size: 22px;
            margin-right: 7px;
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
    
</style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><div><img class="logo img-fluid" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mx-auto apply">
                <li class="nav-item navs active px-5">
                <a class="nav-link navb text-white" href="course.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navs px-5">
                <button class="nav-link navb text-white btn" id="quiz" onclick=window.location.assign("c_quiz.php");  disabled style=" cursor: not-allowed;">Quiz </button>
                </li>
                <li class="nav-item navs px-5">
                <button class="nav-link navb text-white btn" id="certificate" onclick=window.location.assign("https://www.thoughtbitz.ml/course/Certificate/display1.php?lid=<?php echo $lid;?>");  disabled style="cursor: not-allowed;">Certificate</button>
            </li>

        </ul>
    <div class="circlebar mr-5">
            <div class="container">
                        <div class="row">
                          <div class="offset-md-5 col-md-3  bn">
                            <div class="round" data-value="<?php echo $row['percentage']/16;?>"
                            data-size="75" data-thickness="10"
                            style="
                            background-size: 50px 50px;
                            background-repeat: no-repeat;background-position: center;
                            " onload="Circlle('.round')">
                </div>
              </div>
            </div>
          </div>
          </div>
  </div>
</nav>
<h1 class="mt-3 mb-3 text-center" style="color: #001433;font-family: 'Vast Shadow', cursive;">CODER'S Pack C-Programming</h1>

<div class="row mt-5 ml-3 mr-3">
  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;" style="font-size: 16px">C Programming</div>
      <h4 class="card-title">What is C Programming?</h4>
      <div>
    
                <a href="./C_content/c_card1.php"  class="position-absolute w-100 h-100 text-decoration-none th"></a>
      </div>
      <div class="card-text text-right">
      <?php
       
      if($row['percentage'] == 0){
          echo'<i style="font-size: 2rem; visibility: hidden;" class="fa fa-lock " aria-hidden="true" id="l1" ></i>';
      }
      else{
         echo '<i  style="font-size: 2rem;color: darkgreen;" class="fa fa-check-square-o" aria-hidden="false" id="l2"></i>';
       }
      ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Data Types</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card2.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac2"></a>
      </div>

      <div class="card-text text-right">
           <?php       lock('ac2');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Storage Class in C</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
      
       <div>
                  <a href="./C_content/c_card3.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac3"></a>
      </div>
      <div class="card-text text-right">
             <?php       lock('ac3');      ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Operators</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card4.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac4"></a>
      </div>
   <div class="card-text text-right">
      <?php       lock('ac4');      ?>
      </div>
    </div>
  </div>
 
</div>


<div class="row mt-3 ml-3 mr-3">
  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Arrays</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card5.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac5"></a>
      </div>
       <div class="card-text text-right">
             <?php       lock('ac5');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Switch</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card6.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac6"></a>
      </div>
      <div class="card-text text-right">
         <?php       lock('ac6');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Control Statements</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
      
       <div>
                  <a href="./C_content/c_card7.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac7"></a>
      </div>
       <div class="card-text text-right">
           <?php       lock('ac7');      ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Functions</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card8.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac8"></a>
      </div>
       <div class="card-text text-right">
           <?php       lock('ac8');      ?>
      </div>
    </div>
  </div>
 
</div>


<div class="row mt-3 ml-3 mr-3">
  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">File</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card9.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac9"></a>
      </div>
       <div class="card-text text-right">
           <?php       lock('ac9');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Dynamic Allocation</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
      
       <div>
                  <a href="./C_content/c_card10.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac10"></a>
      </div>
       <div class="card-text text-right">
             <?php       lock('ac10');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Constants in C</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
  
   <div>
                  <a href="./C_content/c_card11.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac11"></a>
      </div>  
       <div class="card-text text-right">
           <?php       lock('ac11');      ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">C macro</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card12.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac12"></a>
      </div>
       <div class="card-text text-right">
             <?php       lock('ac12');      ?>
      </div>
    </div>
  </div>
 
</div>




<div class="row mt-3 ml-3 mr-3 mb-3">
  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Operations</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card13.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac13"></a>
      </div>
      <div class="card-text text-right">
           <?php       lock('ac13');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Qualifier</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card14.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac14"></a>
      </div>
   <div class="card-text text-right">
         <?php       lock('ac14');      ?>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Monil</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card15.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac15"></a>
      </div>
      <div class="card-text text-right">
         <?php       lock('ac15');      ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="card-text text-muted" style="font-size:18px;">C Programming</div>
      <h4 class="card-title">Monil</h4>
      <h6 class="card-title" style="visibility: hidden;">Data Types</h6>
       <div>
                  <a href="./C_content/c_card16.php"  class="position-absolute w-100 h-100 text-decoration-none th" style="pointer-events: none;" id="ac16"></a>
      </div>
       <div class="card-text text-right">
           <?php       lock('ac16');      ?>
      </div>
    </div>
  </div>
 
</div>
<script>
function Circlle(el){
          $(el).circleProgress({fill: {color: 'green'}}).on('circle-animation-progress', function(event,
          progress, stepValue)
          {
             
            $(this).find('strong').text(String(stepValue.toFixed(1))+'%');
            
           
          });
        };
        Circlle('.round');

</script>
<?php 
if($row['percentage'] == 16){
        echo '<script>document.getElementById("quiz").disabled=false;
                document.getElementById("quiz").style.cursor = "pointer";
                </script>';
    }
if($row['quiz'] == 1){
        echo '<script>document.getElementById("certificate").disabled=false;
                document.getElementById("certificate").style.cursor = "pointer";
                </script>';
    }

?>
</body>
</html>
