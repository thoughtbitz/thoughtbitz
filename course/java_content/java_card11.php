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
    $c=11;
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
  <title>Multithreading</title>
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
    <div class="list-group mr-5 Sticky-sidebar">
      <a class=" list-group-item list-group-item-action font-weight-bold border-0 ">
        Multithreading
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">1. Process vs Thread</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">2. Multithreading</a>
      <a href="#third" class="list-group-item list-group-item-action border-0 ml-5">3. Thread Life Cycle</a>
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >Process vs Thread</a></h1>
      <hr>
      <p id = "po">
        <div id="first">
          <h3>Process :</h3>

Process is an executing instance of an application. For example, when you double click MS Word icon in your computer, you start a process that will run this MS word application. Processes are heavy weight operations that they require their own separate memory address in operating system. Because of the processes are stored in separate memory, communication between processes (Inter Process Communication) takes time. Context switching from one process to another process is also expensive.
<br><br><h3>Thread :</h3>

Thread is a smallest executable unit of a process. Thread has it’s own path of execution in a process. For example, when you start MS word, operating system creates a process and start the execution of a primary thread of that process. A process can have multiple threads. Threads of the same process share the memory address of that process. i.e threads are stored inside the memory of a process. As the threads are stored in the same memory space, communication between threads (Inter Thread Communication) is fast. Context switching from one thread to another thread is also less expensive.

<br><br>
<img src="https://i0.wp.com/javaconceptoftheday.com/wp-content/uploads/2014/11/ThreadsAndProcesses.png?w=1200"><br><br>
              </div>
             

              
              <div id="second">
              <h1>Multitherading </h1><hr>
              Multithreading in Java is a process of executing multiple threads simultaneously.

A thread is a lightweight sub-process, the smallest unit of processing. Multiprocessing and multithreading, both are used to achieve multitasking.

However, we use multithreading than multiprocessing because threads use a shared memory area. They don't allocate separate memory area so saves memory, and context-switching between the threads takes less time than process.<br><br>
<h3>Advantages of Java Multithreading</h3>
<br>
1) It doesn't block the user because threads are independent and you can perform multiple operations at the same time.
<br>
2) You can perform many operations together, so it saves time.
<br>
3) Threads are independent, so it doesn't affect other threads if an exception occurs in a single thread.
<br><br>

              </div>
              <div class="q1">
          <label>1. What is multithreaded programming?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                  It’s a process in which two different processes run simultaneously
            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
                It’s a process in which two or more parts of same process run simultaneously

            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Correct
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div><br>
             
              <div id="third">
              <h1>Thread Life Cycle</h1>
              <hr>
              There are six thread states. They are NEW, RUNNABLE, BLOCKED, WAITING, TIMED_WAITING and TERMINATED. At any point of time, thread will be in any one of these states.Let’s extract these thread states programmatically. Execute the below program, it prints all states of a thread.
              <pre>
              public class ThreadsInJava
{
    public static void main(String[] args)
    {
        Thread.State[] states = Thread.State.values();
 
        for (Thread.State state : states)
        {
            System.out.println(state);
        }
    }
}
              </pre>
              <br>
The output of this program will be,<br>
NEW<br>
RUNNABLE<br>
BLOCKED<br>
WAITING<br>
TIMED_WAITING<br>
TERMINATED<br><br>

<h3>1) NEW</h3>
A thread will be in this state before calling start() method.
<br>
<h3>2) RUNNABLE</h3>
A thread will be in this state after calling the start() method.
<br>
<h3>3) BLOCKED</h3>
A thread will be in this state when a thread is waiting for object lock to enter into synchronized method/block or a thread will be in this state if deadlock occurs. Below example shows the states of two threads when deadlock occurs.
<br>
<h3>4)  WAITING</h3>
A thread will be in this state when wait() or join() method is called. Below example shows the thread state when join() method is called.
<br>
<h3>5) TIMED_WAITING</h3>
A thread will be in this state when thread is sleeping. i.e A thread will be in this state when sleep() or wait() with timeOut or join() with timeOut is called.
<br>
<h3>6) TERMINATED</h3>
A thread will be in this state once it finishes it’s execution.
<br><br>
<img src="https://i2.wp.com/javaconceptoftheday.com/wp-content/uploads/2014/11/JavaThreadLifeCycle.png?w=1200">

             
            </div>
            <br>
            <div class="q2">
        <label>7. What is true about threading?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;start() method creates new thread and calls code written in run() method
</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              Correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="radio" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp; run() method creates new thread</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;run() method can be called directly without start() method being called</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              Incorrect
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;run() method calls start() method and runs the code</label>
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

