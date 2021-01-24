 <?php
                include '../database.php';
              mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
                $q="select * from blogs order by blogid desc";
              $result = mysqli_query($con,$q);
              $nums=mysqli_num_rows($result);
              $output='';
              $me='';
              if($nums>=1){
                $count=1;
               while(($row1=mysqli_fetch_array($result,true))!=NULL){
                    $output.='            
                <div class="card mb-3 mt-2 mv position-relative" onclick="fun()">
                <div class="row">
                
                  <div class="col-md-4">

                    <img
                      src="data:image/jpeg;base64,'.base64_encode($row1['thumbnail']).'"
                      class="card-img pb-0  imf h-md-100" alt="...">

                  </div>
                  <div class="col-md-8 pl-0 ">
                    <div class="card-body" id="my">
                      <h5 card-title">'.$row1["blogtitle"].'</h5>
                      <p class="card-text text-muted">'.strtolower(substr(strip_tags($row1["blogtext"]),0,50)).'</p>
                      <p class="card-text text-muted" style="font-size:0.8rem">posted on&nbsp'.$row1['datetime'].'</p>
                        <div class="card-text">
                        <div class="dropdowns text-right offset-lg-11">
                            <a class="dropbtn"><i class="fas fa-ellipsis-h"></i></a>
                                <div class="dropdown-content">
                                 <a href="#">Share</a>
                                     <a href="#">Bookmark</a>
                                   <a href="#">Other</a>
                                </div>
                        </div>
                        </div>
                    </div>
                  </div>
                
                </div>
                  <a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.$row1['blogid'].'" class="position-absolute w-100 h-100 text-decoration-none th"></a>
              </div>
            
              ';
              
            

            }
            
        }
        else{
            $output='<div class="card mb-3 h-20">
                        NO POSTS YET
                    </div>';  
        }
                  echo $output;
                  
        ?>