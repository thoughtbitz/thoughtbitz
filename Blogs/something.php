<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include '../database.php';
if(!isset($_SESSION)){
	session_start();
}
$checking=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$checking){
        echo "database is not connected";
    }
$i = $_POST['i1'];
	//echo $i;
$query1="select * from blogs where blogid > $i and blogid <=$i+3";
$result = mysqli_query($con,$query1);
while($row1 = mysqli_fetch_array($result)){
                        $output='            
                   
                <div class="card mb-3 mt-2 mv position-relative">
                <div class="row">
                   
                  <div class="col-md-8 vb">
                    <div id="my">
                      <a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.$row1['blogid'].'"  class="card-title" style="text-decoration:none;font-weight:bolder;color:black;">'.substr($row1["blogtitle"],0,50).'..</a>
                    <style>
                        @media only screen and (max-width:768px){
                            .card-title{
                                font-size:10px;
                            }
                             .card-img{
                                height:100px;

                            }   
                            .card{
                                 height:100px;
                            }    
                            .text-muted{
                                font-size:8px;
                            }    
                        } 
                          @media only screen and (min-width:768px){
                            .card-title{
                               font-size:1.3rem;
                            }
                            .card-img{
                                height:200px;

                            }  
                             .text-muted{
                                font-size:15px;
                            }   
                            body{
                                font-size:1 rem;
                            }    

                        }   
                         @media only screen and (min-width:1000px){
                            body{
                                font-size:1 rem;
                            }  
                         }    
                        
                    </style>
                      <p class="card-text text-muted">'.strtolower(substr(strip_tags($row1["blogtext"]),0,60)).'</p>';
       
$url=urlencode("https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid=".$row1['blogid']);
                        $joint='<div>
                        <div class="dropdowns text-right text-bottom">
                            <a class="dropbtn"><i class="fa fa-ellipsis-h"></i></a>
                                <div class="dropdown-content">
                                 <a href="https://web.whatsapp.com/send?text='.$url.'">Share</a>
                                     <a href="#">Bookmark</a>
                                   <a href="#">Other</a>
                                </div>
                        </div>
                        </div>
                    </div>
                  </div>
                   <div class="col-md-4 bn monil" style="position:relative">
                <img src="uploads/'.$row1['thumbnail'].'"
                      class="card-img" style=" width:100%;">
               </div>
                </div>
                  
              </div>
              
              <div>

              </div>
              ';
             
               echo $output.$joint;

    //echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width = "250" height="250" ><br><br>';
}

?>
</body>
</html>
