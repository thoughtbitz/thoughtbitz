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
    $c=9;
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
  <title>Polymorphism</title>
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
      l2.style.color = "green"; 
      l1.style.visibility = "visible";
      l1.style.color = "red"; 
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
    var cl1 = document.getElementById("cl1");
    var cl2 = document.getElementById("cl2");
    var cl11 = document.getElementById("cl11");
    if (o1.checked == true || o3.checked == true || o2.checked == true ){
      cl2.style.visibility = "visible";
      cl2.style.color = "red";  
      cl1.style.visibility = "visible";
      cl1.style.color = "green";  
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
      background-color: white;
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
        Polymorphism 
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">1. What is Polymorphism?</a>
      <a href="#thrid" class="list-group-item list-group-item-action border-0 ml-5">2. Static Polymorphism</a>
      <a href="#fourth" class="list-group-item list-group-item-action border-0 ml-5">3. Dynamic Polymorphism</a>
      
    </div>
  </div>
    <div class="col-lg-8">
    <div id="first">
      <h1 class="active"> <a >What is Polymorphism?</a></h1>
      <hr>
      <p id = "po">
        
          If one task is performed in different ways, it is known as polymorphism. For example: to convince the customer differently, to draw something, for example, shape, triangle, rectangle, etc.

In Java, we use method overloading and method overriding to achieve polymorphism.

Another example can be to speak something; for example, a cat speaks meow, dog barks woof, etc.
<br>
              
              In greek, Poly means many and morph means shapes or forms. So. Polymorphism refers to any entity which takes many form.
              </div>
             
              <div id="second">
              <h1>Types of Polymorphism </h1>
              
              Polymorphism in java refers to any entity whether it is an operator or a constructor or any method which takes many forms or can be used for multiple tasks either while compiling or while running a java program.

There are two types of polymorphism in Java.<br>   1) Static Polymorphism <br>       2) Dynamic Polymorphism
</div>




 
              <br>
              <div class="q1">
          <label>Method signature consists of:</label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                Access Modifier, Method Name and Types Of Arguments

            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
              Method Name, Number Of Arguments, Types Of Arguments and Order Of Arguments

            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Correct
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div><br>
             
              <div id="third">
              <h1>Static Polymorphism</h1><hr>
Any entity which shows polymorphism during compile time is called static polymorphism. Operator Overloading, Constructor Overloading and method overloading are best examples of static polymorphism. Because, they show polymorphism during compilation.

In static polymorphism, object used is determined during compilation itself. So, it is called static binding or Early Binding.
<br>
<br><b>Operator Overloading : </b>For example, Operator ‘+’ can be used to add two numbers and also can be used to concatenate two strings. It is called operator overloading. ‘+’ is the only operator in java which is used for operator overloading.

<br><b>Constructor Overloading :</b> We can include multiple constructors in a class. This is called constructor overloading. Through constructor overloading, we can create objects to the class in multiple ways. This shows the polymorphism.

<br><b>Method Overloading :</b> We can have different forms of same method in the same class. This is called method overloading. Through method overloading we can perform different tasks through different forms of the same method. This shows the polymorphism.

 

In casting, we have seen super class reference variable can refer to objects of its sub class. This also shows polymorphism. For example,
<br><pre>
class A
{
     //Some Statements
}
class B extends A
{
     //Some Statements
}
class C extends B
{
    //Some Statements
}
 
public class D
{
    public static void main(String[] args)
    {
        A a = new A();  //A-Class variable refers to A-Class object
        a = new B();    //A-Class variable refers to B-Class object
        a = new C();    //A-Class variable refers to C-Class object
    }
}
</pre><br>
In the above example, ‘a’ is Class A-type reference variable which can be used to refer objects of A-type, B-type or C-type. Because, B-type and C-type are sub class of A-type. This also shows the polymorphism.
</div><br>
              <div id="fourth">
                <h1>Dynamic Polymorphism </h1><hr>
             

Any entity which shows polymorphism during run time is called dynamic polymorphism. Method Overriding is the best example of dynamic polymorphism. It is also called dynamic binding or late binding, because type of the object used will be determined at run time only.

Consider the following example,
<br><pre>
class SuperClass
{
    void methodOfSuperClass()
    {
        System.out.println("From Super Class");
    }
}
class SubClass extends SuperClass
{
    //Super Class Method Overrided
    void methodOfSuperClass()
    {
        System.out.println("From Sub Class");
    }
}
 
public class D
{
    static void util(SuperClass superclass)
    {
        superclass.methodOfSuperClass();
        //For each execution of this method, different objects will be passed to it.
        //which Object will be used is determined during run time only.
        //This shows dynamic polymorphism.
    }
 
    public static void main(String[] args)
    {
        SuperClass superclass1 = new SuperClass();
        SubClass subclass = new SubClass();
        SuperClass superclass2 = new SubClass();
 
        util(superclass1);  //SuperClass object is passes to util()
        util(subclass);     //SubClass object is passed to util()
        util(superclass2); //SubClass object is passed to util()
    }
}
</pre><br>
            </div>
            <div class="q2">
        <label>Can we declare overloaded methods as final?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;Yes</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              Correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;No</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;Maybe</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
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

