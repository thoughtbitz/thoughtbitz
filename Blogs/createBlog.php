<?php 
  include '../API/start.php';
  include '../database.php';
//   $myid=$_GET['create'];
//   $decoded=base64_decode(urldecode($myid));
//   $userid=trim($decoded,"creation");
  $userid=$_COOKIE['userid'];
  $cvb=new check;
  $fgh=$cvb->check_login($userid,$_SESSION['connection']);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="viewport" content="width=device-width" />

<title>Create Blog</title>
<link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../b/bootstrap.js"></script>
  <link rel="stylesheet" href="../b/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<style>
.buttons{
    background-color:#F0FFFF ;
    color: #BDB76B;
    border:0px;
    cursor: pointer;
    font-weight: bold;
    padding: 0.3rem;
    margin-left: .5rem;
    border-radius: 10px;
  
  }
  .button1{
    margin-left: 45rem;
    margin-top: 5rem;
    padding: 0.3rem;
}

@media screen and (max-width: 600px){
    .buttons{
    background-color: #F0FFFF;
    color: #BDB76B;
    border:0px;
    cursor: pointer;
    font-weight: bold;
    
    border-radius: 10px;
  }
  .button1{
      margin-left: 5rem;
    margin-top: 1rem;
    padding: 0.3rem;
    
}

}
body{
    background-color:#F0FFFF;
    font-family: serif;
    margin:0;
    padding:0;
    width:100%;
    overflow-x:hidden;
  }
  .container{
    background-size: cover;
    background-color:#FFFAF0;
    margin-top: 5rem;
    box-sizing: border-box;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    height: auto;
    text-align:center;

  }
textarea{
    text-align: center;
    margin-left: 35rem;
    margin-top: 2rem;
  }


/* The Modal (background) */
 .modals {
  display: none; 
  position: fixed; 
  z-index:1500;
  top:9%;
  width:80%;
  text-align:center;
  overflow-y: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}

/* Modal Content */
 .modals-content {
  background-color:azure;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  border-radius: 40px;
  width:100%;
  height: auto;
  text-align: center;
} 


 .closes{
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closes:hover,
.closes:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
} */ */
/*#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
}*/
input[type=text],input[type=option]{
  border-radius: 0px;
  border-bottom: 2px black;
  border-top: 0px;
  border-right: 0px;
  border-left:0px;
  border-bottom: 2px solid black;
}
input[type=submit]{
  font-size:1.5rem;
  color: black;
  border-radius: 10px;
  background-color: white;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.4);
}
input[type=submit]:hover{
  color: white;
  background-color: black;
  cursor: pointer;
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
</style>
<script>
    </script>
</head>
<body>

  <div class="container c" style="width:100vw;height:100vh">
  <h1>Creation Of Blogs&nbsp<i class="fas fa-blog"></i></h1>
<textarea name="editor" id="text" style="height:70%"></textarea><br>

<script>
let editor;
        ClassicEditor
                                .create( document.querySelector( '#text' ) )
                                .then( text => {
                                    editor =text;
                                       
                                } )</script>
<div class="row" style="justify-content:space-around">
  <button id="myBtn" class="btn col-sm-4 btn-primary">Next&nbsp&nbsp<i class="fa fa-forward"></i></button>
  <button class="btn col-sm-4  btn-outline-success" onclick="tmp()">Back</button>
  <script>
    function tmp() {
      document.location= "https://www.thoughtbitz.ml/Blogs/blogpage.php?welcome='<?php echo urlencode(base64_encode("welcome".$userid));?>'";
    }
  </script>
</div>


<!-- The Modal -->
<div id="myModal" class="modals">
  <div class="modals-content">
    <form method="POST" id="form" enctype="multipart/form-data">
    <span class="close">&times;</span>
    <label>Title: </label>
    <input type="text" id="title" name="bt" />
    <br><br>
    <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
    <p><img id="output" width="100" height="100" /></p>
    <br><br>
    <label>Category:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="Category" id="cate">
    <option selected="selected" disabled>Select category</option>
    <option>Technology</option>
    <option>Food</option>
    <option>Travel</option>
    <option>History</option>
    <option>Entertainment</option>
    <option>Movies</option>
    <option>Music</option>
    <option>Comedy</option>
    <option>Health</option>
    <option>Information Technology</option>
    <option>Programming</option>
    <option>Sports</option>
    <option>Weather condition</option>
    <option>News</option>
    <option>Others</option>
    </select>
    <br><br>
    <input type="submit" name="publish" value="post">
  </form>
  </div>
</div>
</div>
<div class="modal modal-bottom" id="Modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:30%;display:none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:lightgreen;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:red">
        <br>processing ......</h5>
      </div>
      <div class="modal-body" style="background:#F0FFF0;color:green">
         Your post is being processed.....please wait....it will take a while to be on server
         <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-bottom" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  style="top:15%;display:none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:grey;">
        <h5 class="modal-title" id="exampleModalLabel" style="background:black;color:white">
        <br>post uploaded ......</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" style="background:white;color:green">
         <h2 style="color:green">Yeah!Congrats!Your post has been successfully made......<h2>
         redirecting to blog dashboard
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Get the m

var modal= document.getElementById("myModal");
var modal1=document.getElementById("Modal11");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  console.log(editor.getData());
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var loadFile = function(event) {
      var image = document.getElementById('output');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
//     document.getElementById("file").addEventListener("change", function (event) {
// 	compress(event);
// });
 $(document).ready(function(){
      
var form=$('#form');
 var dfg=document.getElementById('exampleModal');
$('#form').on('submit',function(event){
event.preventDefault();
var text=editor.getData();
//   var text =document.getElementById("text").value;
  console.log(text);
    var t = document.getElementById("title");
    var i = document.getElementById("file");
    var a = i.value.substring(i.value.lastIndexOf('.')+1).toLowerCase();
    var c = document.getElementById("cate");

      if(t.value.trim()==""){
          alert(" Please Enter Title ");

          return false;
       }
       else if(t.value.length  < 20){
          alert("Please Enter Valid Title ");
          return false;
       }
       else if( a != "jpeg" && a != "jpg" && a != "png" && a != "bmp"){
          alert("Please select a valid image(JPEG,JPG,PNG,BMP)");
          return false;
       }
       else if(c.value == "Select category"){
          alert("Please Select category");
          return false;
       }
       else{
            modal.style.display="none";
           
            modal1.style.display="block";
           
var formData = new FormData();
formData.append('userid',<?php echo $userid; ?>);
formData.append('bt',t.value.trim());
 var files=$('#file')[0].files[0];
 
 formData.append("text",text);
 formData.append("file",files);
 formData.append("category",c.value);
 console.log(c.value);
$.ajax({
url:'https://www.thoughtbitz.ml/Blogs/works.php',
type:'POST',
data:formData,
contentType: false,
processData: false,
success: function(data){
modal1.style.display='none';  
dfg.style.display='block';
setTimeout(function(){
document.location="./blogpage";
},2100);
 return true;
 
}
      });
       }
})
})

</script>

</body>
</html>
