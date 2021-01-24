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
    $c=12;
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
  <title>String functions in java</title>
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
        string functions in java
      </a>
      <a href="#first" class="list-group-item list-group-item-action border-0 ml-5">1.methods</a>
      <a href="#second" class="list-group-item list-group-item-action border-0 ml-5">2.sample example</a>
      <a href="#third" class="list-group-item list-group-item-action border-0 ml-5">3. queries and questions</a>
      <a href="#fourth" class="list-group-item list-group-item-action border-0 ml-5">4.sample example for conversion </a>
    </div>
  </div>
    <div class="col-lg-8">
      <h1 class="active"> <a >String functions in java(Important)</a></h1>
      <hr>
      <p id = "po">
                In Java, string is basically an object that represents sequence of char values. An array of characters works same as Java string. For example:
            <pre>
                    char[] ch={'t','h','o','u','t','b','i','t','z'};  
                    String s=new String(ch);  
            </pre>
            is same as:

            <pre>
                    String s="thoughtbitz"; 
            </pre>
              <div id="first">
              <h1>methods</h1>
              <table class="w3-table-all notranslate" style="margin:0">
  <tbody><tr>
    <th style="width:22%">Method</th>
    <th style="width:62%">Description</th>
    <th style="width:16%">Return Type</th>
  </tr>
  <tr>
    <td><a >charAt()</a></td>
    <td>Returns the character at the specified index (position)</td>
    <td>char</td>
  </tr>
  <tr>
    <td><a>codePointAt()</a></td>
    <td>Returns the Unicode of the character at the specified index</td>
    <td>int</td>
  </tr>
  <tr>
    <td><a>codePointBefore()</a></td>
    <td>Returns the Unicode of the character before the specified index</td>
    <td>int</td>
  </tr>
  <tr>
    <td><a >codePointCount()</a></td>
    <td>Returns the Unicode in the specified text range of this String</td>
    <td>int</td>
  </tr>
  <tr>
    <td><a>compareTo()</a></td>
    <td>Compares two strings lexicographically</td>
    <td>int</td>
  </tr>
  <tr>
    <td><a>compareToIgnoreCase()</a></td>
    <td>Compares two strings lexicographically, ignoring case differences</td>
     <td>int</td>
 </tr>
  <tr>
    <td><a>concat()</a></td>
    <td>Appends a string to the end of another string</td>
    <td>String</td>
  </tr>
  <tr>
    <td><a >contains()</a></td>
    <td>Checks whether a string contains a sequence of characters</td>
    <td>boolean</td>
  </tr>
  <tr>
    <td><a>contentEquals()</a></td>
    <td>Checks whether a string contains the exact same sequence of characters 
    of the specified CharSequence or StringBuffer</td>
    <td>boolean</td>
  </tr>
  <tr>
    <td><a>copyValueOf()</a></td>
    <td>Returns a String that represents the characters of the character array</td>
     <td>String</td>
 </tr>
  <tr>
    <td><a>endsWith()</a></td>
    <td>Checks whether a string ends with the specified character(s)</td>
     <td>boolean</td>
 </tr>
  <tr>
    <td><a>equals()</a></td>
    <td>Compares two strings. Returns true if the strings are equal, and false 
    if not</td>
    <td>boolean</td>
  </tr>
  <tr>
    <td><a>equalsIgnoreCase()</a></td>
    <td>Compares two strings, ignoring case considerations</td>
     <td>boolean</td>
 </tr>
  <tr>
    <td>format()</td>
    <td>Returns a formatted string using the specified locale, format string, and arguments</td>
     <td>String</td>
 </tr>
  <tr>
    <td>getBytes()</td>
    <td>Encodes this String into a sequence of bytes using the named charset, storing the result into a new byte array</td>
     <td>byte[]</td>
 </tr>
  <tr>
    <td>getChars()</td>
    <td>Copies characters from a string to an array of chars</td>
     <td>void</td>
 </tr>
  <tr>
    <td><a>hashCode()</a></td>
    <td>Returns the hash code of a string</td>
      <td>int</td>
</tr>
  <tr>
    <td><a>indexOf()</a></td>
   <td>Returns the position of the first found occurrence of specified characters in a string</td>
      <td>int</td>
 </tr>
  <tr>
    <td>intern()</td>
    <td>Returns the index within this string of the first occurrence of the specified character, starting the search at the specified index</td>
     <td>String</td>
 </tr>
  <tr>
    <td><a>isEmpty()</a></td>
   <td>Checks whether a string is empty or not</td>
      <td>boolean</td>
 </tr>
  <tr>
    <td><a>lastIndexOf()</a></td>
    <td>Returns the position of the last found occurrence of specified characters in a string</td>
     <td>int</td>
  </tr>
  <tr>
    <td><a>length()</a></td>
    <td>Returns the length of a specified string</td>
    <td>int</td>
 </tr>
  <tr>
    <td>matches()</td>
    <td>Searches a string for a match against a regular expression, and returns the matches</td>
    <td>boolean</td>
 </tr>
  <tr>
    <td>offsetByCodePoints()</td>
    <td>Returns the index within this String that is offset from the given index by codePointOffset code points</td>
    <td>int</td>
  </tr>
  <tr>
    <td>regionMatches()</td>
   <td>Tests if two string regions are equal</td>
     <td>boolean</td>
  </tr>
  <tr>
    <td><a>replace()</a></td>
    <td>Searches a string for a specified value, and returns a new string where the specified values are replaced</td>
    <td>String</td>
  </tr>
  <tr>
    <td>replaceFirst()</td>
   <td>Replaces the first occurrence of a substring that matches the given regular expression with the given replacement</td>
    <td>String</td>
 </tr>
  <tr>
    <td>replaceAll()</td>
   <td>Replaces each substring of this string that matches the given regular expression with the given replacement</td>
    <td>String</td>
 </tr>
 <tr>
    <td>split()</td>
   <td>Splits a string into an array of substrings</td>
    <td>String[]</td>
 </tr>
  <tr>
    <td><a>startsWith()</a></td>
    <td>Checks whether a string starts with specified characters</td>
    <td>boolean</td>
 </tr>
  <tr>
    <td>subSequence()</td>
   <td>Returns a new character sequence that is a subsequence of this sequence</td>
    <td>CharSequence</td>
 </tr>
  <tr>
    <td>substring()</td>
  <td>Extracts the characters from a string, beginning at a specified start position, and through the specified number of character</td>
    <td>String</td>
  </tr>
  <tr>
    <td>toCharArray()</td>
    <td>Converts this string to a new character array</td>
    <td>char[]</td>
  </tr>
  <tr>
    <td><a>toLowerCase()</a></td>
    <td>Converts a string to lower case letters</td>
     <td>String</td>
 </tr>
  <tr>
    <td>toString()</td>
   <td>Returns the value of a String object</td>
      <td>String</td>
 </tr>
  <tr>
    <td><a>toUpperCase()</td>
   <td>Converts a string to upper case letters</td>
      <td>String</td>
 </tr>
  <tr>
    <td><a>trim()</a></td>
    <td>Removes whitespace from both ends of a string</td>
    <td>String</td>
  </tr>
  <tr>
    <td>valueOf()</td>
    <td>Returns the primitive value of a String object</td>
    <td>String</td>
  </tr>
</tbody>
</table>
              </div>
             
                    <br>
             Java String class provides a lot of methods to perform operations on strings such as compare(), concat(), equals(), split(), length(), replace(), compareTo(), intern(), substring() etc.
             <img src="https://static.javatpoint.com/images/core/string-implements.png" height="200" width="200">
              <div id="second">
              <h1>simple program example for string</h1>
              
              <pre>
                public class StringExample{  
                    public static void main(String args[]){  
                    String s1="java";//creating string by java string literal  
                    char ch[]={'s','t','r','i','n','g','s'};  
                    String s2=new String(ch);//converting char array to string  
                    String s3=new String("example");//creating java string by new keyword  
                    System.out.println(s1);  
                    System.out.println(s2);  
                    System.out.println(s3);  
                    }
                }  

              </pre>
              </div>
              <div class="q1">
          <label>Which of these method of class String is used to extract a single character from a String object?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio"  name = "radio" id="r1"  >
            <label class="form-check-label ml-4" for="r1">
                 charAt()
            </label>
            <label class="form-check-label" id = "l1" for="r1" style="visibility: hidden">
              Correct
            </label>
            <br>
            <input class="form-check-input" type="radio" name="radio" id="r2"  >
            <label class="form-check-label ml-4" for="r2">
              CharAt()
            </label>
            <label class="form-check-label" id = "l2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
            <br>
            <button class="btn btn-primary" id = "c1" onclick="check1();">Check</button>
        </div>
        </div>
             
              <div id="third">
              <h1>email your answers on (help.thoughtbitz@gmail.com)</h1>
              <pre>
              Do You Know?=>
                    Why are String objects immutable?
                    How to create an immutable class?
                    What is string constant pool?
                    What code is written by the compiler if you concatenate any string by + (string concatenation operator)?
                    What is the difference between StringBuffer and StringBuilder class?
             </pre>
              </div>
              
              <div id="fourth">
                <h1>String conversion example </h1>
              <pre>
Java – Convert String to int using Integer.valueOf(String)
Integer.valueOf(String) works same as Integer.parseInt(String). It also converts a String to int value. However there is a difference between Integer.valueOf() and Integer.parseInt(), the valueOf(String) method returns an object of Integer class whereas the parseInt(String) method returns a primitive int value. The output of the conversion would be same whichever method you choose. This is how it can be used:

String str="1122";
int inum = Integer.valueOf(str);
The value of inum would be 1122.

This method also allows first character of String to be a minus ‘-‘ sign.

String str="-1122";
int inum = Integer.valueOf(str);
Value of inum would be -1122.
              </pre>
            </div>
            <div class="q2">
        <label>Which of these constructors is used to create an empty String object?</label>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o1">&nbsp;&nbsp;&nbsp;&nbsp;A. String()</label>
              <label class="form-check-label " id = "cl1" for="r2" style="visibility: hidden">
              Correct
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input " id = "o2">&nbsp;&nbsp;&nbsp;&nbsp;B. String(void)</label>
              <label class="form-check-label" id = "cl2" for="r2" style="visibility: hidden">
              Incorrect
            </label>
        </div>
        <div class="form-check ml-5">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o3">&nbsp;&nbsp;&nbsp;&nbsp;C. String(0)</label>
              <label class="form-check-label" id = "cl11" for="r2" style="visibility: hidden">
              Inorrect
              </label>
        </div>
        <div class="form-check ml-5  ">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" id = "o4">&nbsp;&nbsp;&nbsp;&nbsp;D. None of the mentioned</label>
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

