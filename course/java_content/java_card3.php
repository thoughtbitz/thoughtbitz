<?php
    if(isset($_POST['mac1'])){
        header("Location:../java_card_structure.php?com=3");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Variable and DataTypes</title>
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
<div class="container-fluid" style="font-size:2rem;font-family: 'Roboto', sans-serif;">

  <div class="row content">
    <div class="col-lg-2">
    <div class="list-group mr-5">
      <a class=" list-group-item list-group-item-action font-weight-bold border-0 ">
        Variables and Data Types
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">Variable Declaration:</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">Types of variables</a>
      <a href="#third" class="list-group-item list-group-item-action border-0 ml-5">What is Data Types in Java? </a>
      <a href="#fourth" class="list-group-item list-group-item-action border-0 ml-5">Points to Remember:</a>
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >What is a Variable in Java?</a></h1>
      <hr>
      <p >
            Variable in Java is a data container that stores the data values during Java program execution. Every variable is assigned data type which designates the type and quantity of value it can hold. Variable is a memory location name of the data. The Java variables have mainly three types : Local, Instance and Static.

In order to use a variable in a program you to need to perform 2 steps
<ol>
<li>
Variable Declaration</li>
<li>Variable Initialization</li>
</ol>
<hr>
              
              <div id="first" style="margin-top:3rem;">
                <h1>Variable Declaration:</h1>
                <hr>
                To declare a variable, you must specify the data type & give the variable a unique name.<br><br><br>


                <textarea id="w3review" name="w3review" rows="6" cols="50">
int a,b,c;
float pi;
double d;
char a;
</textarea><br><br>
            <b>Variable Initialization:</b><hr><br>
            Example of other Valid Initializations are<br><br><br>
            <textarea id="w3review" name="w3review" rows="8" cols="50">
int a=2,b=4,c=6;

float pi=3.14f;

double do=20.22d;

char a=’v’;
</textarea><br><br>
<hr>
            


              </div>
              <div id="second" style="margin-top:3rem;">
                                <h1>Types of variables</h1> <hr><br>In Java, there are three types of variables:<br>
<ol>

<li>Local Variables</li>
<li>Instance Variables</li>
<li>Static Variables</li>
</ol>
1)<b>Local Variables:</b>
Local Variables are a variable that are declared inside the body of a method.<br><br>

2) <b>Instance Variables:</b>
Instance variables are defined without the STATIC keyword .They are defined Outside a method declaration. They are Object specific and are known as instance variables.<br><br>

3)<b> Static Variables: </b>
Static variables are initialized only once, at the start of the program execution. These variables should be initialized first, before the initialization of any instance variables.<br><br>
Example: Types of Variables in Java<br><br><br>

 <textarea id="w3review" name="w3review" rows="9" cols="50">
class Guru99 {
    static int a = 1; //static variable  
    int data = 99; //instance variable  
    void method() {
        int b = 90; //local variable  
    }
}
</textarea><br><br>

              </div>
              <div class="q1">
          <label>1.Compiler never assigns a default value to an uninitialized local variable in Java Programming !!</label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                 True
            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Correct
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
              False
            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div>
             
              <div id="third" style="margin-top:3rem;">
                <h1>What is Data Types in Java? </h1><hr>
                Data Types in Java are defined as specifiers that allocate different sizes and types of values that can be stored in the variable or an identifier. Java has a rich set of data types. Data types in Java can be divided into two parts :<br>
<ol>
<li>
Primitive Data Types :- which include integer, character, boolean, and float</li>
<li>Non-primitive Data Types :- which include classes, arrays and interfaces.</li>
</ol>     
<img src="https://www.guru99.com/images/java/DataTypes.png" alt="no" height="50%" width="50%">


<hr>        

<table class="table table-striped"> 
<caption>Java Data Types</caption> 
            <tr> 
            <th> Data Type </th> 
            <th> Default Value </th> 
            <th> Default size </th> 
            </tr> 
            <tr> 
            <td> byte </td>
            <td> 0 </td> 
            <td> 1 byte </td> 
            </tr> 
            <tr>
            <td> short </td> 
            <td> 0 </td>
            <td> 2 bytes </td>
                </tr> 
                <tr> 
                <td> int </td> 
                <td> 0 </td>
                <td> 4 bytes </td>
                </tr>
                <tr>
                    <td> long </td>
                    <td> 0L </td>
                    <td> 8 bytes </td>
                    </tr>
                        <tr>
                        <td> float </td> 
                        <td> 0.0f </td>
                        <td> 4 bytes </td> </tr> <tr> <td> double </td> <td> 0.0d </td> <td> 8 bytes </td> </tr> <tr> <td> boolean </td> <td> false </td> <td> 1 bit </td> </tr> <tr> <td> char </td> <td> '\u0000' </td> <td> 2 bytes </td> </tr> </table>
                        <br>
                        <b>Primitive Data Types</b>
Primitive Data Types are predefined and available within the Java language. Primitive values do not share state with other primitive values.<br>

There are 8 primitive types: byte, short, int, long, char, float, double, and boolean Integer data types
<textarea id="w3review" name="w3review" rows="5" cols="50">
byte (1 byte)
short (2 bytes)
int (4 bytes)
long (8 bytes)
</textarea><br><br>
</div>

              <div id="fourth" style="margin-top:2rem;">
              <hr>
                <h1><b>Points to Remember:</b>

</h1>
<ul><li>All numeric data types are signed(+/-).</li>
<li>The size of data types remain the same on all platforms (standardized)</li>
<li>char data type in Java is 2 bytes because it uses UNICODE character set. By virtue of it, Java supports internationalization. UNICODE is a character set which covers all known scripts and language in the world</li> </ul>
</hr>
            </div>
            
            <div class="q2">
        <label>2. Which of the following is not a primitive data type ?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp; byte
</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              InCorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;enum
</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;short</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              InCorrect
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;int</label>
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


    


  </div>
</div>

</body>
</html>

