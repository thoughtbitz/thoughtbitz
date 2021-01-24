<!DOCTYPE html>
<html>
<head>


  <title>ThoughtBitz Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./csslogin/loginblog1.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <meta content="width=device-width, initial-scale=1" name="viewport" />

  <style>
  body{
      background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1JoO0vCJiM9Q8iEWFQka92UO3aPzNAGjGEw&usqp=CAU");
      background-repeat:no-repeat;
      background-size:cover;
  }
  #formContents{
 
 color:black;
  
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}
  @media screen and (max-width: 500px) {
  .wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  padding: 20px;
  }
  #formContents {
  
  background:rgba(255,255,255,0.7);
  color:black;
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
  color:white;

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
  
h2.inactive {
  color: #cccccc;
    text-transform: capitalize;

}


  </style>
  <script>
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
  function checkid(){
    var e=document.getElementById("ei");
    var data=f1.emailid.value;
    var pat="^[a-z A-Z 0-9]{4,20}@+[a-z A-z]{2,6}[\.]{1}[c C]{1}[A-Z a-z]{1,6}([\.]{1}[A-Z a-z]{2,6})?$";
    var reg=new RegExp(pat);

  if(reg.test(data)){
        e.style.display="none";
  }
  else{
        e.style.display="";
    }
}
function checkps(){
  var e=document.getElementById("pi");
  var data = document.getElementById("pass1");
    if(data.value.trim() != ""){
        e.style.display="none";
    }
    else{
    e.style.display="";
    }
}
  </script>

</head>
<body style="overflow-x:hidden">
  <div class="wrapper fadeInDown" >

  <div id="formContents" class="formcontent" style="border-radius:14px;box-sizing:border-box">
    <!-- Tabs Titles -->
    <h2 class="active text-dark" style="background:transparent;border-radius:14px"><i class="fas fa-sign-in-alt"></i> Sign In </h2>
    <a href="./signup"><h2 class="inactive text-dark underlineHover"><i class="fas fa-user-plus"></i>Sign Up</h2></a>
    <!-- Icon -->
    <div class="fadeIn first ">
      <img src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" id="icon" alt="User Icon"/>
    </div>
    <!-- Login Form -->
    <form  name="f1" action="action.php" method="POST" autocomplete="off">
      <input name="emailid" type="Email" id="login" class="fadeIn second form-control"  placeholder="Enter Email-id" onblur="checkid()" required/>
      <i class="fa fa-asterisk" style="font-size:10px;color:red" id="ei"></i><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5N3jprNkJB29R16C5OG-VCHhu7lEEOOR7Zg&usqp=CAU" style="border-radius:12px" height="30" width="30" data-toggle="tooltip"  title="enter valid email-id">

      <input name="psw"  type="password" id="pass1" class="fadeIn third form-control"  placeholder="password"  onkeypress="checkps()" required/> 
     <i class="fa fa-asterisk" style="font-size:10px;color:red" id="pi"></i><a type="button" data-delay={"show":5000,"hide":1000} class="bs-tooltip-top" data-toggle="tooltip" data-html="true" data-template='<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner bg-dark text-white"></div></div>' data-placement="bottom"  title="Password must contain special characters,&#x0a;minimum one capital alphabet,digits &#x0a;and length should be greater than or equal to 8"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn9xt9yoob3PGrTozOcN0xbwSz6RgfH3X5zQ&usqp=CAU" style="border-radius:12px" height="30" width="30"></a><br>
       <br>
       <div style="display:block;box-sizing:border-box;background:black;color:white;border-radius:15px;">
        (Site uses cookies for the best experience)
        <br>
      </div>
      <button type="submit" class="btn btn-success "  name="login-btn" style="margin-top:1rem">LogIn</button>
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter" style="margin-top:2rem">
        <a class="underlineHover text-dark" href="ForgetPasswordBlog.php"><h4><i class="fas fa-unlock-alt"></i>Forgot Password?</h4></a>
      </div>
  </div>
  
</div>
</body>
</html>
