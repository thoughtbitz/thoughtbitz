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
    $c=5;
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
  <title>Arrays</title>
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
        Arrays In Java
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">1. Introduction</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">2. Important Points</a>
      <a href="#fourth" class="list-group-item list-group-item-action border-0 ml-5">3. One-Dimensional Arrays</a>
      <a href="#fifth" class="list-group-item list-group-item-action border-0 ml-5">4. Instantiating an Array in Java</a>
      <a href="#sixth" class="list-group-item list-group-item-action border-0 ml-5">5. Array Literal</a>
      <a href="#seventh" class="list-group-item list-group-item-action border-0 ml-5">6. Accessing Java Array Elements using for Loop</a>
      <a href="#eighth" class="list-group-item list-group-item-action border-0 ml-5">7. Arrays of Objects</a>
      <a href="#ninth" class="list-group-item list-group-item-action border-0 ml-5">8. Multidimensional Arrays</a>
      
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >Arrays</a></h1>
      <hr>
      <p id = "po">
            
              <div id="first">
                
                <br>An array is a group of like-typed variables that are referred to by a common name. Arrays in Java work differently than they do in C/C++. <br><b>Following are some important points about Java arrays.</b><br>


              </div>
              <div id="second">
In Java all arrays are dynamically allocated.(discussed below)<br>
Since arrays are objects in Java, we can find their length using the object property length. This is different from C/C++ where we find length using sizeof.<br>
A Java array variable can also be declared like other variables with [] after the data type.<br>
The variables in the array are ordered and each have an index beginning from 0.<br>
Java array can be also be used as a static field, a local variable or a method parameter.<br>
The size of an array must be specified by an int value and not long or short.<br>
The direct superclass of an array type is Object.<br>
Every array type implements the interfaces Cloneable and java.io.Serializable.<br>
Array can contain primitives (int, char, etc.) as well as object (or non-primitive) references of a class depending on the definition of the array. In case of primitive data types, the actual values are stored in contiguous memory locations. In case of objects of a class, the actual objects are stored in heap segment.<br>
              </div>
              <div class="q1">
          <label>Which of the following is correct about Arrays ? </label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                 &nbsp;An array is a group of like-typed variables that are referred to by a common name.
            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Correct
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
              &nbsp;Arrays in Java work same as they do in C/C++.
            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div><br>
             
              <div id="third">
                
              </div><br>  
              <div id="fourth">
                <h2>One-Dimensional Arrays :</h2><br>
                <p>An array declaration has two components: the type and the name. type declares the element type of the array. The element type determines the data type of each element that comprises the array. Like an array of integers, we can also create an array of other primitive data types like char, float, double, etc. or user-defined data types (objects of a class). Thus, the element type for the array determines what type of data the array will hold.Although the first declaration above establishes the fact that intArray is an array variable, no actual array exists. It merely tells the compiler that this variable (intArray) will hold an array of the integer type. To link intArray with an actual, physical array of integers, you must allocate one using new and assign it to intArray.<p><br>
            </div>
            <div id="fifth">
                <h1>Instantiating an Array in Java : </h1><br>
                    <p>When an array is declared, only a reference of array is created. To actually create or give memory to array, you create an array like this:The general form of new as it applies to one-dimensional arrays appears as follows:</p><br><br>

<pre>var-name = new type [size];</pre><br><br>
<p>Here, type specifies the type of data being allocated, size specifies the number of elements in the array, and var-name is the name of array variable that is linked to the array. That is, to use new to allocate an array, you must specify the type and number of elements to allocate.</p><br>
<br>
<pre>int intArray[];    //declaring array<br>
intArray = new int[20];  // allocating memory to array</pre><br>
            </div>
            <div id="sixth">
                <h1>Array Literal : </h1><br>
                    <p>In a situation, where the size of the array and variables of array are already known, array literals can be used.</p><br><br>

<pre> int[] intArray = new int[]{ 1,2,3,4,5,6,7,8,9,10 }; <br>
 // Declaring array literal</pre><br><br>
<p>The length of this array determines the length of the created array.
There is no need to write the new int[] part in the latest versions of Java</p><br>
<br>

            </div>
            <div id="seventh">
                <h1>Accessing Java Array Elements using for Loop : </h1><br>
                    <p>Each element in the array is accessed via its index. The index begins with 0 and ends at (total array size)-1. All the elements of array can be accessed using Java for Loop.</p><br><br>

<pre> // accessing the elements of the specified array<br>
for (int i = 0; i < arr.length; i++)<br>
  System.out.println("Element at index " + i + 
                                " : "+ arr[i]); <br><br>
 // Declaring array literal</pre><br><br>

<br>

            </div>
            <div id="eighth">
                <h1>Arrays of Objects : </h1><br>
                    <p>Multidimensional arrays are arrays of arrays with each element of the array holding the reference of other array. These are also known as Jagged Arrays. A multidimensional array is created by appending one set of square brackets ([]) per dimension. Examples:</p><br><br>

<pre> int[][] intArray = new int[10][20]; //a 2D array or matrix<br>
int[][][] intArray = new int[10][20][10]; //a 3D array</pre><br><br>
<p>The studentArray contains seven memory spaces each of size of student class in which the address of seven Student objects can be stored.The Student objects have to be instantiated using the constructor of the Student class and their references should be assigned to the array elements in the following way.</p><br>
<pre>Student[] arr = new Student[5];</pre><br>
<br>

            </div>
            <div id="ninth">
                <h1>Multidimensional Arrays : </h1><br>
                    <p>An array of objects is created just like an array of primitive type data items in the following way.</p><br><br>

<pre>  Student[] arr = new Student[7]; //student is a user-defined class</pre><br><br>
<p>The studentArray contains seven memory spaces each of size of student class in which the address of seven Student objects can be stored.The Student objects have to be instantiated using the constructor of the Student class and their references should be assigned to the array elements in the following way.</p><br>
<pre>Student[] arr = new Student[5];</pre><br>
<br>

            </div>
            <div class="q2">
        <label>How to Instantialize Array ?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var-name = new type [size];</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              Correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Array = new int[25];</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intArray = new int[20];</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              Correct
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intArray[];</label>
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

