<?php 
  include '../API/start.php';
  include '../database.php';
  $myid=$_GET['userid'];
  $blogid1=$_GET['blogid'];
  $decoded=base64_decode(urldecode($myid));
  
 
  $userid=trim($decoded,"update");
  
  $decoded1=base64_decode(urldecode($blogid1));
  $blogid=trim($decoded1,"update");

  mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
  $query="select b.*,u.* from blogs b,user u where b.blogid='$blogid' and u.userid=b.userid1";
  $output=mysqli_query($_SESSION['connection'],$query);
  $blogarray=mysqli_fetch_array($output,true);

  
    





 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="viewport" content="width=device-width" />

<title>Update blog</title>
<link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
<link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../b/bootstrap.js"></script>
  <link rel="stylesheet" href="../b/bootstrap.min.css">
  <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
  
    
    </script>
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
    
    font-family: serif;
    margin:0;
    padding:0;
    width:100%;
    overflow-x:hidden;
  }
  .container{
    background-size: cover;
    background-color:#F8F8FF;
    margin-top: 5rem;
    box-sizing: border-box;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    height: auto;
    text-align:center;
    margin-bottom:5rem;

  }
textarea{
   
  
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
    .navb:hover {
        cursor: pointer;
  
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark sticky-top bg-dark justify-content-between">
            <a class="navbar-brand" href="#"><div><img class="logo img-fluid"  class="form-control" src="../img/icon-official-favicon-thoughtBitz-459832xzc.png" alt="Logo" /></div>
                        <div class="text-white logo-mark">ThoughtBitz</div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menuz justify-content-between" id="navbarSupportedContent" style="margin-right:15rem" >
            <ul class="navbar-nav mr-auto mx-auto apply" >
                <li class="nav-item navs active px-5">
                <a class="nav-link navb text-white" href="../dashboard?userid=<?php echo urlencode(base64_encode("dashboard".$userid."viewposts"));?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navs px-5">
                <a class="nav-link navb text-white " href="blogpage.php">blogpage </a>
                </li>
               
            
        </ul>
        
            </div>
        </nav>



  <div class="container c" >
  <h1>Update Blogs&nbsp<i class="fas fa-blog"></i></h1><br><br>
    
                        <div class="row text-center">
                            <div class="col-sm-12"><input type="text" value="<?php echo $blogarray['blogtitle'];?>"  style="min-width:1px;" name="title" id="title"   >
                            <button   name="update1" value="1" class="btn btn-outline-success" onclick="change_title(this)" id="1">update title</button>
                            </div>
                            
                        </div><br><br>
                <div class="row ml-5">
                        <div class="col-sm-12  offset-lg-4 offset-md-4 ">
                        <input type="file" name="file" id="file" class="inputfile" style="display:none;" value="uploads/<?php echo $blogarray['thumbnail']; ?>" onchange="readURL(this)">
                                <div style="position:relative;display:flex">
                               
                                        <div>
                                        <div style="background-color:white;position:relative;top:2rem;width:2rem;height:2rem;" ><label for="file"><i class="fas fa-pencil-alt"></i></label>
                                        </div>
                                        <?php echo '<img id="image" src="uploads/'.$blogarray['thumbnail'].'" style="width:150px;height:200px;"/>';?><br>
                                         <button   name="update2" value="2" class="btn btn-outline-success " onclick="change_image(this)">update image</button>
                                        </div>
                                    
                                   
                                </div>
                                
                                
                            </div>
                              
                
                </div><br><br><br>
                <div class="row">
                    <div class="col-sm-12">
                    
                    <select  id="cate1" >
                        
                        <option value="Technology">Technology</option>
                        <option value="Food">Food</option>
                        
                        <option value="Travel">Travel</option>
                        <option value="History">History</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Movies">Movies</option>
                        <option value="Music">Music</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Health">Health</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Programming">Programming</option>
                        <option value="Sports">Sports</option>
                        <option value="Weather condition">Weather condition</option>
                        <option value="News">News</option>
                        <option value="Others">Others</option>
                        </select>
                          <button   name="update3" value="3" class="btn btn-outline-success" onclick="change_category(this)">update category</button>
                    </div>
                   
                
                </div><br>
                <div class="row" style="justify-content:space-around">
                        <div class="col-12"><textarea name="editor" id="text" type="text" ><?php echo $blogarray['blogtext'];?></textarea><br>
                                <script>
                                let editor;
                                        ClassicEditor
                                                                .create( document.querySelector( '#text' ) )
                                                                .then( text => {
                                                                    editor =text;
                                                                    
                                                                } )</script>
                    
                        <button  class="btn col-sm-4 btn-outline-success" value="4" onclick="change_textarea(this)">update text</i></button>
                            </div>
                        
                
                </div><br><br>

                <div class="row " style="justify-content:space-around">
                        <button id="myBtn" class="btn col-sm-4 btn-outline-success mb-5" onclick="home()">final update&nbsp&nbsp<i class="fa fa-forward"></i></button>
                        <button class="btn col-sm-4  btn-outline-success mb-5" onclick="tmp()">Back</button>
                        <script>
                        function home(){
                            document.location= "https://www.thoughtbitz.ml/Blogs/blogpage.php?welcome='<?php echo urlencode(base64_encode("welcome".$myid));?>'";

                        }
                            function tmp() {
                            document.location= "https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid=<?php echo urlencode(base64_encode("blogs".$blogid)); ?>";
                            }
                        </script>
                </div>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Get the m


   var select="<?php echo $blogarray['categoryname']; ?>";

$( document ).ready(function() {
     $('#cate1 option:contains(' + select + ')').prop({selected: true});
});


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }



function change_title(x) {
            var value=$('#title').val();
            
        $.ajax(
        {
            
        url:"change.php?change="+$(x).attr('value')+"&&userid=<?php echo $blogarray['userid1'];?>&&blogid=<?php echo $blogarray['blogid'];?>&&value="+value,

            success:function(data){
                console.log( "ready"+data );
                alert("changed title");
        }
        }
        );
}   
function change_category(x) {
        var value=$('#cate1').val();
        
    $.ajax(
    {
        
    url:"change.php?change="+$(x).attr('value')+"&&userid=<?php echo $blogarray['userid1'];?>&&blogid=<?php echo $blogarray['blogid'];?>&&value="+value,

        success:function(data){
            console.log( "ready"+data );
            alert("updated");
    }
    }
    );
}   
function change_textarea(x) {
                
                var value=editor.getData();
                if(value == ""){alert("empty");}
                
            $.ajax(
            {
                
            url:"change.php?change="+$(x).attr('value')+"&&userid=<?php echo $blogarray['userid1'];?>&&blogid=<?php echo $blogarray['blogid'];?>&&value="+value,

                success:function(data){
                    console.log( "ready"+data );
                    alert("update");
            }
            }
            );
}   
function change_image(x) {
                
                 var files=$('#file')[0].files[0];
                 if(files==null){
                     alert("you can upload new pic by choosing new one: right now old one is consider as blog-image");
                 }
                 else{
                var formData = new FormData();
                formData.append('value',files);
                
            $.ajax(
            {
                
            url:"change.php?change="+$(x).attr('value')+"&&userid=<?php echo $blogarray['userid1'];?>&&blogid=<?php echo $blogarray['blogid'];?>&&value="+files,
            type:'POST',
            data:formData,
            contentType: false,
            processData: false,
                success:function(data){
                    console.log( "ready"+data );
                    alert("updated");
            }
            }
            );

        }
}   

</script>


</body>
</html>
