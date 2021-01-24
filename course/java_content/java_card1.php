<?php
    if(isset($_POST['mac1'])){
        header("Location:../java_card_structure?com=1");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Introduction to Java</title>
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
      cl2.style.color = "red";  
      cl1.style.visibility = "visible";
      cl1.style.color = "red";  
      cl22.style.visibility = "visible";
      cl22.style.color = "red"; 
      cl11.style.visibility = "visible";
      cl11.style.color = "green"; 
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
      font-family: 'Roboto', sans-serif;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #F5FFFA;
      height: 100%;
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
<div class="container-fluid" style="font-size:2rem;">

  <div class="row content">
    <div class="col-lg-2">
    <div class="list-group mr-5">
      <a class=" list-group-item list-group-item-action font-weight-bold border-0 ">
        Introduction to JAVA
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">Why Use Java?</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">History</a>
      <a href="#third" class="list-group-item list-group-item-action border-0 ml-5">JAVA properties</a>
      
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >What is Java?</a></h1>
      <hr>
      <p id = "po" style="font-size:2rem;">
        Java is a popular programming language, created in 1995.

            It is owned by Oracle, and more than 3 billion devices run Java.<br>

            It is used for:
            <ul>

            <li>Mobile applications (specially Android apps)</li>
            <li>Desktop applications</li>
            <li>Web applications</li>
            <li>Web servers and application servers</li>
            <li>Games</li>
            <li>Database connection</li>
            <li>And much, much more!</li>
            </ul>
        Java is a class-based, object-oriented programming language and is designed to have as few implementation dependencies as possible. A general-purpose programming language made for developers to write once run anywhere that is compiled Java code can run on all platforms that support Java. Java applications are compiled to byte code that can run on any Java Virtual Machine. The syntax of Java is similar to c/c++.
        <hr>
         </p>
              
              
              <div id="first" style="margin-top:2rem;" >
              <h1>Why Use Java?</h1>
              <hr>
              <ul>
             <li> Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
                <li>It is one of the most popular programming language in the world</li>
               <li> It is easy to learn and simple to use</li>
             <li>   It is open-source and free</li>
             <li>   It is secure, fast and powerful</li>
                <li>t has a huge community support (tens of millions of developers)</li>
               <li> Java is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs</li>
               <li> As Java is close to C++ and C#, it makes it easy for programmers to switch to Java or vice versa</li>
                </ul>
                <hr>
              </div>
             

              
              <div id="second" style="margin-top:2rem;">
              <h1>History </h1>
              <hr>
              
             
Java’s history is very interesting. It is a programming language created in 1991. James Gosling, Mike Sheridan, and Patrick Naughton, a team of Sun engineers known as the Green team initiated the Java language in 1991. Sun Microsystems released its first public implementation in 1996 as Java 1.0. It provides no-cost -run-times on popular platforms. Java1.0 compiler was re-written in Java by Arthur Van Hoff to strictly comply with its specifications. With the arrival of Java 2, new versions had multiple configurations built for different types of platforms.

In 1997, Sun Microsystems approached the ISO standards body and later formalized Java, but it soon withdrew from the process. At one time, Sun made most of its Java implementations available without charge, despite their proprietary software status. Sun generated revenue from Java through the selling of licenses for specialized products such as the Java Enterprise System.

On November 13, 2006, Sun released much of its Java virtual machine as free, open-source software. On May 8, 2007, Sun finished the process, making all of its JVM’s core code available under open-source distribution terms.
<hr>
              </div>
              <div class="q1">
          <label>1)JAVA is object orientated language.</label>
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
             
              <div id="third" style="margin-top:2rem;">
              <h1>The Java language was designed with the following properties:</h1>
              <hr>
              
<ul>
<li>
Platform independent: Java programs use the Java virtual machine as abstraction and do not access the operating system directly. This makes Java programs highly portable. A Java program (which is standard-compliant and follows certain rules) can run unmodified on all supported platforms, e.g., Windows or Linux.</li>
<li>
Object-orientated programming language: Except the primitive data types, all elements in Java are objects.</li>
<li>
Strongly-typed programming language: Java is strongly-typed, e.g., the types of the used variables must be pre-defined and conversion to other objects is relatively strict, e.g., must be done in most cases by the programmer.</li>
<li>
Interpreted and compiled language: Java source code is transferred into the bytecode format which does not depend on the target platform. These bytecode instructions will be interpreted by the Java Virtual machine (JVM). The JVM contains a so called Hotspot-Compiler which translates performance critical bytecode instructions into native code instructions.</li>
<li>
Automatic memory management: Java manages the memory allocation and de-allocation for creating new objects. The program does not have direct access to the memory. The so-called garbage collector automatically deletes objects to which no active pointer exists.</li>
<li>
The Java syntax is similar to C++. Java is case-sensitive, e.g., variables called myValue and myvalue are treated as different variables.</li>
</ul>
             <hr>
              </div>
              
             
            <div class="q2">
        <label>2) Which of the following is not a Java features?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;Dynamic
</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;Architecture Neutral
</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;Use of pointers
</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              Correct
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;Object-oriented</label>
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

