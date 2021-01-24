<?php
                include '../database.php';
              mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
              $vb=time();
                $q="select a.*,count(b.like_name) as counts,CONVERT(a.datetime, SIGNED INTEGER) as caste from blogs a,main b where a.blogid=b.blogid  group by a.blogid having caste<'$vb' and caste>'$vb'-(86400*3) order by counts desc limit 3";
              $result = mysqli_query($_SESSION['connection'],$q);
              $nums=mysqli_num_rows($result);
              $output='';
              $me='';
              if($nums!=0){
                $count=1;
               while(($row1=mysqli_fetch_array($result,true))!=NULL){
                    $output.='     
                       
                          
                            <div class="col-md-4" style="padding-top:3rem">
                            <div class="card mb-4 shadow-sm" style="height:100%">
                            <a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' &&check='.$vari1.'">
                                            <img src="uploads/'.$row1['thumbnail'].'"
                                                            class="card-img" height="300"></a>
                                <div class="card-body">
                                <b>&nbsp;&nbsp;'.$row1['username'].'</b>
                                <p class="card-text" style="font-size:1rem;">
                                            <a href="https://www.thoughtbitz.ml/Blogs/WatchBlog.php?blogid='.urlencode(base64_encode("blogs".$row1['blogid'])).' &&check='.$vari1.'"  class="card-title" style="text-decoration:none;font-weight:bolder;color:black;padding-top:15px;">&nbsp;'.substr($row1["blogtitle"],0,30).'..</a></p>
                                            <p class="card-text">
                                                '.strtolower(substr(strip_tags($row1["blogtext"]),0,50)).'
                                                </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                <a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDNjjW3kRo2U4VTaMTntt1o1kGEa3bWP6Y7Q&usqp=CAU" height="20" width="20"></a><a href="#" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi8Ph1Ga9ReNqmOg3In7GUajmFeHcBp4LC8g&usqp=CAU" height="20" width="20"></a><a href="https://web.whatsapp.com/send?text='.$url.'" class="text-decoration-none"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-U_6gwWityJAnciueDBp_AT5P7kzLTJOHdw&usqp=CAU" height="20" width="20" style="border-radius:40%"></a>
                                                </div>
                                                <small class="text-dark">'.$row1['views'].'VISITS&nbsp</small>
                                                <small class="text-white bg-primary">'.$row1['counts'].'Likes</small>
                                                
                                </div>
                                </div>
                            </div>
                            </div>
                            
                        ';
                            

              
               }
                echo $output;
        }
        else{
            $output='<div class="card mb-3 h-20">
                        NO POSTS in trends
                    </div>'; 
                    echo $output; 
        }
                 
                  
        ?>





   