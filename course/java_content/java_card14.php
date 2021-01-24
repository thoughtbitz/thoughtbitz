<?php
    include '../../database.php';
    $lid = 1;
    
    $b = $_COOKIE['userid'];
    $con=$_SESSION['connection'];
    $con1=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$con1){
      echo" connection unsuccessful";
    }
    $q = "select * from c_course where uid = $b and lid= $lid";
    $result = mysqli_query($con,$q);
    $row = mysqli_fetch_array($result);
    $c=14;
    if(isset($_POST['mac1'])){
      if($row['percentage'] < $c){
        $q = "update c_course set  percentage = $c where uid = $b and lid = $lid ";
        mysqli_query($con,$q);
      }
      header("Location:../java_card_structure.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Overloading vs overriding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <script>
  var i =0;
  function check1(){
    var c1 = document.getElementById("c1");
    var r1 = document.getElementById("r1");
    var l1 = document.getElementById("l1");
    var r2 = document.getElementById("r2");
    var l2 = document.getElementById("l2");
    if (r1.checked == true || r2.checked == true){
      l2.style.visibility = "visible";
      l2.style.color = "red"; 
      l1.style.visibility = "visible";
      l1.style.color = "green"; 
      c1.disabled = true;
      i=i+1;
    }
    all(i);
  }
  function check2(){
    var c2 = document.getElementById("c2");
    var o1 = document.getElementById("o1");
    var o2 = document.getElementById("o2");
    var o3 = document.getElementById("o3");
    var o4 = document.getElementById("o4");
    var cl1 = document.getElementById("cl1");
    var cl2 = document.getElementById("cl2");
    var cl11 = document.getElementById("cl11");
    var cl22 = document.getElementById("cl22");
    if (o1.checked == true || o3.checked == true || o2.checked == true || o4.checked == true){
      cl2.style.visibility = "visible";
      cl2.style.color = "green";  
      cl1.style.visibility = "visible";
      cl1.style.color = "red";  
      cl22.style.visibility = "visible";
      cl22.style.color = "red"; 
      cl11.style.visibility = "visible";
      cl11.style.color = "red"; 
      c2.disabled = true;
      i=i+1;
    }
    all(i);
  }
  /*function check3(){
    window.location.href = 'card_structure.php';
  }*/
  function all(i){
    var mac = document.getElementById("mac");
    if(i!=2){
      mac.disabled = true;
    }
    else{
      mac.disabled = false;
    }
  }
</script>

  <style>
    body{
      font-size: 14px;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #F5FFFA;
      height: 100%;
    }
    
    #po{
      background-color: #FFFAFA;
      text-align: justify;
      text-align-last: justify;
    }
      .q1,.q2{
    text-align: justify;
    text-align-last: left;
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
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar bg-dark navbar-inverse sticky-top  justify-content-between">
            <a class="navbar-brand" href="#"><div><img class="logo img-fluid" src="../../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mx-auto apply">
                <li class="nav-item navs  px-5">
                <a class="nav-link navb text-white" href="../course.php?>">Home</a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white " href="../mycourse.php">My Course </a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white" >Bookmark <i class="fa fa-bookmark" aria-hidden="true"></i></a>
                </li>
            
        </ul>
        </div>
        </nav>
<nav>
<div class="container-fluid">

  <div class="row content">
    <div class="col-lg-2">
    <div class="list-group mr-5">
      <a class=" list-group-item list-group-item-action font-weight-bold border-0 ">
        overloading and overriding
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">1.Overloading and overriding</a>
      
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >Overloading and overriding</a></h1>
      <hr>
      <p id = "po">
              <div id="first">
              <h1 class="h1">Difference between method overloading and method overriding in java</h1>
<p>There are many differences between method overloading and method overriding in java. A list of differences between method overloading and method overriding are given below:</p>

<table class="alt" border="1">
<tr><th>No.</th><th>Method Overloading </th><th>Method Overriding</th></tr>
<tr><td>1)</td><td>Method overloading is used <em>to increase the readability</em> of the program.</td><td>Method overriding is used <em>to provide the specific implementation</em> of the method that is already provided by its super class.</td></tr>
<tr><td>2)</td><td>Method overloading is performed <em>within class</em>.</td><td>Method overriding occurs <em>in two classes</em> that have IS-A (inheritance) relationship.</td></tr>
<tr><td>3)</td><td>In case of method overloading, <em>parameter must be different</em>.</td><td>In case of method overriding, <em>parameter must be same</em>.</td></tr>
<tr><td>4)</td><td>Method overloading is the example of <em>compile time polymorphism</em>.</td><td>Method overriding is the example of <em>run time polymorphism</em>.</td></tr>
<tr><td>5)</td><td>In java, method overloading can't be performed by changing return type of the method only. <em>Return type can be same or different</em> in method overloading. But you must have to change the parameter.</td><td><em>Return type must be same or covariant</em> in method overriding.</td></tr>
</table>

<br>
Method Overloading is a Compile time polymorphism. In method overloading, more than one method shares the same method name with different signature in the class. In method overloading, return type can or can not be be same, but we must have to change the parameter because in java, we can not achieve the method overloading by changing only the return type of the method.

<pre>
class MethodOverloadingEx{  
   static int add(int a, int b){return a+b;}  
   static int add(int a, int b, int c){return a+b+c;}  
 
    public static void main(String args[]) {
      System.out.println(add(4, 6));
      System.out.println(add(4, 6, 7));
    }
} 

</pre>
              </div>
              
              <div class="q1">
          <label>Which of these keywords can be used to prevent Method overriding?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                  final
            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Correct
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
              static
            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div>
             
              <div id="third">
              Method Overriding is a Run time polymorphism. In method overriding, derived class provides the specific implementation of the method that is already provided by the base class or parent class. In method overriding, return type must be same or co-variant (return type may vary in same direction as the derived class).
              </div>
             
              <div id="fourth">
               <pre>
                    class Animal{  
                        void eat(){System.out.println("eating.");}  
                        }  
                        class Dog extends Animal{  
                        void eat(){System.out.println("Dog is eating.");}  
                        }  
                        class MethodOverridingEx{  
                            public static void main(String args[]) {
                            Dog d1=new Dog();
                            Animal a1=new Animal();
                            d1.eat();
                            a1.eat();
                        }
                    } 
               </pre>
            </div>
            <div class="q2">
        <label>What is the process of defining a method in a subclass having same name & type signature as a method in its superclass?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;a) Method overloading</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              InCorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;b) Method overriding</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;c) Method hiding</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              InCorrect
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;d) None of the mentioned</label>
              <label class="form-check-label" id = "cl22" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <button class="btn btn-primary" id = "c2" onclick="check2();">Check</button>
      </div>
      </p>
      <br>
      <div class="row m-4">
    <form method="post">
    <button class="btn btn-primary " name="mac1" type= "submit" id="mac" disabled  onclick="check();"><i class="fa fa-check"  style="color:white;font-size:1rem;"></i>
Mark as Completed</button>
  </form>
  </div>
    </div>

    <div class="col-lg-2 sidenav">
      <h4>ThoughtBitz</h4><hr>
      <h4>Adsence</h4>
    </div>
    


  </div>
</div>

</body>
</html>

