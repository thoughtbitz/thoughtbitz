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
    $c=10;
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
  <title>Abstract Class vs Interface</title>
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
      cl1.style.color = "green";  
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
        Abstract Class vs Interface
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">1. What is Abstract Class</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">2. What is Interface?</a>
      <a href="#third" class="list-group-item list-group-item-action border-0 ml-5">3. Notes on Interface</a>
      <a href="#fourth" class="list-group-item list-group-item-action border-0 ml-5">4. Abstract Class vs Interface</a>
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >What is Abstract Class?</a></h1>
      <hr>
      <p id = "po">
        <div id="first">
          A class which is declared with the abstract keyword is known as an abstract class in Java. It can have abstract and non-abstract methods (method with the body).Another way, it shows only essential things to the user and hides the internal details, for example, sending SMS where you type the text and send the message. You don't know the internal processing about the message delivery.

Abstraction lets you focus on what the object does instead of how it does it.<br>

<h4>Ways to achieve Abstraction</h4>

There are two ways to achieve abstraction in java:<br>

1. Abstract class (0 to 100%)<br>
2. Interface (100%)<br><br>

An abstract method is a method that is declared without an implementation (without braces, and followed by a semicolon), like this:

abstract void moveTo(double deltaX, double deltaY);
If a class includes abstract methods, then the class itself must be declared abstract, as in:<br><br>
<pre>
public abstract class GraphicObject {
   // declare fields
   // declare nonabstract methods
   abstract void draw();
}
</pre><br>
When an abstract class is subclassed, the subclass usually provides implementations for all of the abstract methods in its parent class. However, if it does not, then the subclass must also be declared abstract.
              
              
              A class which is declared as abstract is known as an abstract class. It can have abstract and non-abstract methods. It needs to be extended and its method implemented. It cannot be instantiated.

<h3>Points to Remember</h3>
<ul>
<li>An abstract class must be declared with an abstract keyword.</li>
<li>It can have abstract and non-abstract methods.</li>
<li>It cannot be instantiated.</li>
<li>It can have constructors and static methods also.</li>
<li>It can have final methods which will force the subclass not to change the body of the method.</li>
</ul>
              </div>
             <img src="https://static.javatpoint.com/images/abstract-class-in-java.jpg"><br>
     <br><br>         
              <div id="second">
              <h1>What is Interface? </h1><hr>
              An interface in Java is a blueprint of a class. It has static constants and abstract methods.

The interface in Java is a mechanism to achieve abstraction. There can be only abstract methods in the Java interface, not method body. It is used to achieve abstraction and multiple inheritance in Java.

In other words, you can say that interfaces can have abstract methods and variables. It cannot have a method body.

<br>
Java Interface also represents the IS-A relationship.

It cannot be instantiated just like the abstract class.
<br>
1. Since Java 8, we can have default and static methods in an interface.
<br>
2.Since Java 9, we can have private methods in an interface.
<br>
<br>
<h3>Why use Java interface?</h3>

There are mainly three reasons to use interface. They are given below.
<br>
1.It is used to achieve abstraction.<br>
2.By interface, we can support the functionality of multiple inheritance.<br>
3.It can be used to achieve loose coupling.<br>
<br><br>

<img src="https://static.javatpoint.com/interview/images/why-use-java-interface.jpg"><br><br><br>
              </div>
              <div class="q1">
          <label> Can we declare an Interface with “abstract” keyword?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                 Yes
            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Correct
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
              No
            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div><br><br>
             
              <div id="third">
              <h1>Notes on Interfaces:</h1><hr>
              
Like abstract classes, interfaces cannot be used to create objects (in the example above, it is not possible to create an "Animal" object in the MyMainClass)
Interface methods do not have a body - the body is provided by the "implement" class
On implementation of an interface, you must override all of its methods
Interface methods are by default abstract and public
Interface attributes are by default public, static and final
An interface cannot contain a constructor (as it cannot be used to create objects)
<br><br>
<h3>Why And When To Use Interfaces?</h3>
<br>
1) To achieve security - hide certain details and only show the important details of an object (interface).
<br>
2) Java does not support "multiple inheritance" (a class can only inherit from one superclass). However, it can be achieved with interfaces, because the class can implement multiple interfaces. Note: To implement multiple interfaces, separate them with a comma (see example below).<br><br>

<pre>
interface Drawable{  
void draw();  
}  
//Implementation: by second user  
class Rectangle implements Drawable{  
public void draw(){System.out.println("drawing rectangle");}  
}  
class Circle implements Drawable{  
public void draw(){System.out.println("drawing circle");}  
}  
//Using interface: by third user  
class TestInterface1{  
public static void main(String args[]){  
Drawable d=new Circle();//In real scenario, object is provided by method e.g. getDrawable()  
d.draw();  
}}  
</pre>
              </div>
              <br>
              <div id="fourth">
                <h1>Abstract Class vs Interface</h1><hr>

<b>Type of methods:</b> Interface can have only abstract methods. Abstract class can have abstract and non-abstract methods. From Java 8, it can have default and static methods also.<br>
<b>Final Variables:</b> Variables declared in a Java interface are by default final. An abstract class may contain non-final variables.
<br><b>Type of variables:</b> Abstract class can have final, non-final, static and non-static variables. Interface has only static and final variables.
<br><b>Implementation:</b> Abstract class can provide the implementation of interface. Interface can’t provide the implementation of abstract class.
<br><b>Inheritance vs Abstraction:</b> A Java interface can be implemented using keyword “implements” and abstract class can be extended using keyword “extends”.
<br><b>Multiple implementation:</b> An interface can extend another Java interface only, an abstract class can extend another Java class and implement multiple Java interfaces.
<br><b>Accessibility of Data Members:</b> Members of a Java interface are public by default. A Java abstract class can have class members like private, protected, etc.<br><br><br>
<img src=" https://media.geeksforgeeks.org/wp-content/uploads/Abstract-Class-vs-Interface.png"><br><br><br>

<h3>When to use what?</h3>

Consider using abstract classes if any of these statements apply to your situation:
<br>
In java application, there are some related classes that need to share some lines of code then you can put these lines of code within abstract class and this abstract class should be extended by all these related classes.
You can define non-static or non-final field(s) in abstract class, so that via a method you can access and modify the state of Object to which they belong.
You can expect that the classes that extend an abstract class have many common methods or fields, or require access modifiers other than public (such as protected and private).<br>
Consider using interfaces if any of these statements apply to your situation:
<br>
It is total abstraction, All methods declared within an interface must be implemented by the class(es) that implements this interface.
A class can implement more than one interface. It is called multiple inheritance.
You want to specify the behavior of a particular data type, but not concerned about who implements its behavior.<br><br>
            </div>
            <div class="q2">
        <label>Why the below class is showing compilation error?
        <pre>
        abstract class AbstractClass
        {
            abstract void abstractMethod()
            {
                System.out.println("First Method");
            }
        }   
        </pre>
        </label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;Yes,Because abstract methods must not have a body.
</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              Correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;No,Because abstract methods must not have a body.
</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;Yes Because abstract methods must  have a body.
</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              Incorrect
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;None of the above</label>
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

