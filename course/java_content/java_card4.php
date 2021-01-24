<?php
    if(isset($_POST['mac1'])){
        header("Location:../java_card_structure.php?com=4");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Control Statement</title>
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
      cl22.style.color = "green"; 
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
        Control Statements
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">Nested if statement</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">For Loop</a>
      <a href="#third" class="list-group-item list-group-item-action border-0 ml-5">While</a>
      
    </div>
  </div>
    
      <div class="col-6">
<div id="body-content">
<h1>Control Statement</h1><hr>
<h2>If Else Statement</h2>
<p>In Java, if statement is used for testing the conditions. The condition matches the statement it returns true else it returns false. There are four types of If statement they are:</p>
<ol class="content" type="i">
<li>if statement</li>
<li>if-else statement</li>
<li>if-else-if ladder</li>
<li>nested if statement</li>
</ol>
<h3>if Statement</h3>
<p>In Java, if statement is used for testing conditions. It is used for only true condition.</p>
<p><b></b></p>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
if(condition)
{  
//code
  
}  
	</code>
</pre>
<h4><b>Data-flow-diagram of If Block</b></h4>

<p><b>Example:</b></p>
<pre>	<code class="language-java">
public class IfDemo1 {  
public static void main(String[] args) 
	{  
	int marks=70;  
	if(marks > 65)
		{  
		System.out.print("First division");  
		}  
	}  
}  
	</code>
</pre>

<h3>if-else Statement</h3>
<p>In Java, the if-else statement is used for testing conditions. It is used for true as well as for false condition.</p>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
if(condition)
{  
//code for true  
}
Else
{  
//code for false  
}  
	</code>
</pre>
<h4><b>Data-flow-diagram of If Else Block</b></h4>

<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
public class IfElseDemo1 {  
public static void main(String[] args) 
{  
int marks=50;  
if(marks > 65)
{  
System.out.print("First division");  
}  
else
{  
System.out.print("Second division");  
}
}  
}  
	</code>
</pre>

<h3>if-else-if ladder Statement</h3>
<p>In Java, the if-else-if ladder statement is used for testing conditions. It is used for testing one condition from multiple statements.</p>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
if(condition1)
{  
//code for if condition1 is true  
}
else if(condition2)
{  
//code for if condition2 is true  
}  
else if(condition3)
{  
//code for if condition3 is true  
}  
...  
else
{  
//code for all the false conditions   
}  
	</code>
</pre>
<h4>Data-flow-diagram of If Else If Block</h4>

<p><b>Example:</b></p>
<pre>	<code class="language-java">
public class IfElseIfDemo1 {  
public static void main(String[] args) {  
int marks=75;  
    if(marks<50){
System.out.println("fail");  
    }  
    else if(marks>=50 && marks<60){
System.out.println("D grade");  
    }  
    else if(marks>=60 && marks<70){
System.out.println("C grade");  
    }  
    else if(marks>=70 && marks<80){
System.out.println("B grade");  
    }  
    else if(marks>=80 && marks<90){
System.out.println("A grade");  
}else if(marks>=90 && marks<100){  
System.out.println("A+ grade");  
}else{  
System.out.println("Invalid!");  
    }  
}  
}  
	</code>
</pre>

<label><h3 id="first">Nested if statement</h3></label>
<p>In Java, the Nested if statement is used for testing conditions. In this, one if block is created inside another if block when the outer block is true then only the inner block is executed.</p>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
if(condition)
{    
     		//statement
     if(condition)
{  
             //statement 
    }    
}  
	</code>
</pre>
<h4><b>Data-flow-diagram of Nested If Block</b></h4>

<p><b>Example:</b></p>
<pre>	<code class="language-java">
public class NestedIfDemo1 {    
public static void main(String[] args) 
{      
int age=25;  
int weight=70;    
if(age>=18)
{    
if(weight>50)
{  
System.out.println("You are eligible");  
}    
}    
}	
}  
	</code>
</pre>

<h2>Nested try block</h2>
<p>In Java, there can be multiple try blocks. A try block within another try block is known as nested try block. In a program when any block of code can cause an error and the entire program can cause another error then try blocks are made</p>
<pre>	<code class="language-java">
try  
{  
    		statements
    		try  
    		{  
        		Statements
			try  
    			{  
        			statements
    			}  
    			catch(Exception e)  
   			{	  
    			}  
    		}  
    		catch(Exception e)  
   		{	  
    		}  
}  
catch(Exception e)  
{  
}  
	</code>
</pre>
<p><b>Example:</b></p>
<pre>	<code class="language-java">
class NestedDemo1
{  
public static void main(String args[])
{  
try{
			try{
				System.out.println("Divide 39/0");  
				int b =39/0;  
			}
catch(ArithmeticException e)
{
System.out.println(e);
}  
			try{
				inta[]=new int[8];  
				a[8]=4;  
			}
catch(ArrayIndexOutOfBoundsException e)
{
System.out.println(e);
}  
		}
catch(Exception e)
{
System.out.println(e);
}  

	}  
} 
	</code>
</pre>

<div class="q1">
          <label>7) State TRUE or FALSE. A Single-Line comment or Multiline-comment is allowed in between if () and Left Brace ( { ).</label>
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
<h2 id="second">For Loop</h2>
<p>In Java, for loop is used for executing a part of the program again and again. When the number of execution is fixed then it is suggested to use for loop. In java there are 3 types of for loops, they are as follows:</p>
<ol class="content">
<li>Simple for loop</li>
<li>For-each loop</li>
<li>labelled for loop</li>
</ol>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
for(initialization;condition;increment/decrement)
{  
//statement 
}  	
	</code>
</pre>
<h3>Parameters:</h3>
<h4>1) Initialization</h4>
<p>It is the initial condition which is executed only once at the starting of a loop. It is an optional condition.</p>
<h4>2) Condition</h4>
<p>It is used to test a condition each time while executing. The execution continues until the condition is false. It is an optional condition.</p>
<h4>3) Statement</h4>
<p>It is executed every time until the condition is false.</p>
<h4>4) Increment/Decrement</h4>
<p>It is used for incrementing and decrementing the value of a variable. It is an optional condition.</p>
<h4>Data Flow Diagram of for loop</h4>

<p><b>Example for simple For loop</b></p>
<pre>	<code class="language-java">
public class ForDemo1
{  
public static void main(String[] args) 
	{  
		int n, i;
		n=2;
		for(i=1;i<=10;i++)
		{  
			System.out.println(n+"*"+i+"="+n*i);  
		}  
}  	
}  
	</code>
</pre>

<p><b>Example for Nested for loop</b></p>
<pre>	<code class="language-java">
public class ForDemo2
{  
public static void main(String[] args) 
{  
for(inti=1;i<=5;i++)
{  
for(int j=1;j<=i;j++)
{  
				System.out.print("* ");  
}  
System.out.println(); 
}  
}  
}  
	</code>
</pre>

<h3>for-each Loop</h2>
<p>In Java, for each loop is used for traversing array or collection. In this loop, there is no need for increment or decrement operator. </p>
<pre>	<code class="language-java">
Syntax:
for(Type var:array)
{  
//code for execution
}  
	</code>
</pre>
<p><b>Example:</b></p>
<pre>	<code class="language-java">
public class ForEachDemo1
{  
public static void main(String[] args) 
		{    
			inta[]={20,21,22,23,24};   
			for(int i:a)
{  
				System.out.println(i);  
			}  
}  
}  
	</code>
</pre>

<h3>Labelled For Loop</h3>
<p>In Java, Labelled For Loop is used to give label before any for loop. It is very useful for nesting for loop.</p>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
labelname:  
for(initialization;condition;incr/decr)
{  
//code for execution 
}  
	</code>
</pre>
<p><b>Example:</b></p>
<pre>	<code class="language-java">
public class LabeledForDemo1
{  
public static void main(String[] args) 
{ 
	num:  
		for(inti=1;i<=5;i++)
{  
	num1:  
		for(int j=1;j<=5;j++)
{  
			if(i==2&&j==2)
{  
			break num;  
			}  
		System.out.println(i+" "+j);  
		}  
		}  
}  
}  
	</code>
</pre>


<h2 id="third">While Loop</h2>
<p>In Java, While loop is a control statement. It is used for iterating a part of the program several times. When the number of iteration is not fixed then while loop is used.</p>
<p><b>Syntax:</b></p>
<pre>	<code class="language-java">
while(condition)
{  
//code for execution
}  
	</code>
</pre>
<h4><b>Data-flow-diagram of While Block</b></h4>


<p><b>Example:</b></p>
<pre>	<code class="language-java">
public class WhileDemo1
{  
	public static void main(String[] args) 
	{  
		inti=1;  
		while(i<=10)
		{  
			System.out.println(i);  
			i++;  
		}  
	}  
}  
	</code>
</pre>

<p><b>Example for infinite while loop</b></p>
<pre>	<code class="language-java">
public class WhileDemo2 
{  
	public static void main(String[] args) 
	{  
		while(true)
		{  
		System.out.println("infinitive while loop");  
		}  
	}  
}  
	</code>
</pre>

<div class="q2">
        <label>1) An IF-ELSE statement is also called ___.
</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;Branching statement
</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              InCorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp; Control statement
</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp; Block statements
</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              InCorrect
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;All</label>
              <label class="form-check-label" id = "cl22" for="r2" style="visibility: hidden">
              correct
            </label>
        </div>
        <button class="btn btn-primary" id = "c2" onclick="check2();">Check</button>
      </div>
<div class="row m-4">
    <form method="post">
    <button class="btn btn-primary " name="mac1" type= "submit" id="mac" disabled  onclick="check();"><i class="fa fa-check"  style="color:white;font-size:1rem;"></i>
Mark as Completed</button>
  </form>
  </div>
<div class="col-lg-2 sidenav">
      <h4>ThoughtBitz</h4><hr>
      <h4>Adsence</h4>
    </div>

</div>
</div>
</div>

      
    

    
    


  </div>
</div>

</body>
</html>

