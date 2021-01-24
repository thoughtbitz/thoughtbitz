<!DOCTYPE html>
<html>
<head>
<title>ThoughtBitz SignUp</title>
<link rel="stylesheet" type="text/css" href="./csslogin/signup.css">
<link rel="icon" href="../img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 body{
      background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1JoO0vCJiM9Q8iEWFQka92UO3aPzNAGjGEw&usqp=CAU");
      background-repeat:no-repeat;
      background-size:cover;
  }
@media(max-width: 500px){ 
        .wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  background:rgba(255,255,255,0.8);
  min-height: 100%;
  padding: 20px;
}
#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}
h2.inactive {
  color: #cccccc;
  
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
  cursor: pointer;
}

h2 {
  text-align:center;
  font-size:0.8rem;
  font-weight:bolder;
  text-transform:capitalize;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}
.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
  font-size:10px;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
  font-size:10px;
}

}
</style>
  <script>
 var data1;
  var name=0,name1=0,name2=0,name3=0;
check();
function checkid(){
    var e=document.getElementById("ei");
    var data=f1.email.value;
    var pat="^[a-z A-Z 0-9]{4,20}@+[a-z A-z]{2,6}[\.]{1}[c C]{1}[A-Z a-z]{1,6}([\.]{1}[A-Z a-z]{2,6})?$";
    var reg=new RegExp(pat);

  if(reg.test(data)){
    name=1;

e.style.display="none";
check();
  }
  else
    {
      name=0;
  
    e.style.display="";

    }
}
function checkus(){
  var e=document.getElementById("us");
  var data=f1.username.value;
  var pat= "[a-zA-Z]+\\.?";
  var reg=new RegExp(pat);

if(reg.test(data)){

e.style.display="none";
name1=1;
check();
}
else
  {
  e.style.display="";
  name1=0;
  }
}
function checkps(){
  var e=document.getElementById("pi");
  var data=f1.pass.value;
  var pat="^.*(?=.{8,})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$";
  var reg=new RegExp(pat);
  passwordcheck();
if(reg.test(data)){
    data1 = data;
    e.style.display="none";
    name2=1;
    var dc=document.getElementById("any");
    dc.innerHTML="";
    check();
    checkrps();
}
else
  {
        name2=0;
        var dc=document.getElementById("any");
        dc.style.color="red";
        dc.style.display="block";
        dc.innerHTML="Password must contain atleast one Capital Character && Special Character && Digit && Length must be grater than 8";
        e.style.display="";
  }



}
function checkrps(){
    //alert("inside");
  var e=document.getElementById("rpi");
  var data=f1.confirm.value;
  var pat="^.*(?=.{8,})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$";
  var reg=new RegExp(pat);
  var data1=f1.pass.value;
  passwordcheck();
  e.style.display="none";
/*if(reg.test(data) && data == data1){
e.style.display="none";
name3=1;
checkps();
checkpassword();
passwordcheck();
}
else
  {
    
    name3=0;
  e.style.display="";
  }*/
}
/*function check(){

var e=document.getElementById("sid");

if(name==1 && name1==1 && name2==1 && name3==1 )
{
e.disabled= false;
}
else{

  e.disabled= true;
}
}*/

function passwordcheck(){
    var pass1=f1.pass.value;
    var pass2=f1.confirm.value;
    var dc=document.getElementById("any");
    if(!pass1){
        dc.style.color="red";
        dc.style.display="block";
        dc.innerHTML="Enter please Create Password first!!";
    }
    else if(pass1 && pass2){
        if(pass1==pass2){
            var e=document.getElementById("rpi");
            e.style.display="none";
            dc.style.color="green";
            dc.style.display="block";
            dc.innerHTML="password matched successfully";
            var sid = document.getElementById("sid");
            sid.disabled=false;
        }
        else if(pass1!=pass2){
            dc.style.color="red";
            dc.style.display="block";
            dc.innerHTML="passwords could not match !";
            var sid = document.getElementById("sid");
            sid.disabled=true;
        }
    }
}
</script>
</head>
<body style="overflow-x:hidden">
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
   <a href="./Thoughtbitz-login" class="inactive underlineHover px-auto"><h2>Sign In<i class="fas fa-sign-in-alt"></i></h2></a>
    <h2 class="active">Sign Up<i class="fas fa-user-plus"></i></h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" id="icon" alt="User Icon" />
    </div>
    <!-- Login Form -->
    <form action="../Email-Verification-master/index.php" method="POST" name="f1" autocomplete="off">
      <input type="text" name="username" id="login" class="fadeIn second" placeholder="Username" onblur="checkus()" required>  <i class="fa fa-asterisk" style="font-size:10px;color:red" id="us"></i><i class="fas fa-user-plus" style="color:blue"></i><br>
      <input type="Email" name="email" id="login" class="fadeIn second"  placeholder="Enter your Email" onblur="checkid()" required>  <i class="fa fa-asterisk" style="font-size:10px;color:red" id="ei"></i><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5N3jprNkJB29R16C5OG-VCHhu7lEEOOR7Zg&usqp=CAU" style="border-radius:12px" height="30" width="30" data-toggle="tooltip"  title="enter valid email-id"><br>
      <input type="password" name="pass" id="password1" class="fadeIn third" placeholder="Create Your Password" onkeyup="checkps()" required>  <i class="fa fa-asterisk" style="font-size:10px;color:red" id="pi"></i><a type="button" data-delay={"show":5000,"hide":1000} class="bs-tooltip-top" data-toggle="tooltip" data-html="true" data-template='<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner bg-dark text-white"></div></div>' data-placement="bottom"  title="Password must contain special characters,&#x0a;minimum one capital alphabet,digits &#x0a;and length should be greater than or equal to 8"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn9xt9yoob3PGrTozOcN0xbwSz6RgfH3X5zQ&usqp=CAU" style="border-radius:12px" height="30" width="30"></a><br>
      <input type="password" name="confirm" id="password2" class="fadeIn third"  placeholder="ReEnter password" onkeyup="checkrps()" onfocus="checkpassword()" required>  <i class="fa fa-asterisk" style="font-size:10px;color:red" id="rpi"></i><a type="button" data-delay={"show":5000,"hide":1000} class="bs-tooltip-top" data-toggle="tooltip" data-html="true" data-template='<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner bg-dark text-white"></div></div>' data-placement="bottom"  title="Password must contain special characters,&#x0a;minimum one capital alphabet,digits &#x0a;and length should be greater than or equal to 8"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn9xt9yoob3PGrTozOcN0xbwSz6RgfH3X5zQ&usqp=CAU" style="border-radius:12px" height="30" width="30"></a><br>
      <div id="any" style="display:none;color:green;"></div>
      <button type="submit" id="sid" class="btn btn-outline-success mb-3 mt-2"  name="sendmail" disabled="true">Register</button>
    </form>
  </div>
</div>
</body>
</html>
