<?php
    include './database.php';
    mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
    //$encodedid=$_COOKIE['userid'];
    //$usertrim=base64_decode(urldecode($encodedid));
    $userid=$_COOKIE['userid'];
$query1="select * from user where userid=$userid";
$success=mysqli_query($_SESSION['connection'],$query1);
$arrays=mysqli_fetch_array($success);
$ids=substr($arrays['email'], 0, strpos($arrays['email'], '@'));
    //code
   if(isset($_POST['update1'])){
        $uname=$_POST['oman'];
        $query="update user set username='".$uname."' where userid=$userid;";
        mysqli_query($_SESSION['connection'],$query);
       echo "<script>console.log('hii')</script>";
       echo "";
       header('Location:https://www.thoughtbitz.ml/user/'.$ids);
       //header("refresh: 1; url = ../profile/user.php"); 
       // exit; 

    }

        if(isset($_POST['update2'])){
                    //echo "file:".$_FILES['Profile']['tmp_name']."<br>";
                    //$profile=$_POST['Profile'];
                    $image = addslashes(file_get_contents($_FILES['Profile']['tmp_name']));
                    //$profile=addslashes(file_get_contents($_FILES['Profile']['tmp_name']));
                    //echo "profile name is:".$image;
                    //echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" height="200" width="200"/>';
                    //echo "error:".error_reporting(E_ALL);
                    //echo "warning".error_reporting(E_WARNING);

                    //$profile=file_get_contents($profile);
                    $query="update user set profileimage='".$image."' where userid=$userid;";
                    mysqli_query($_SESSION['connection'],$query);
                    //echo "<script>console.log('hii')</script>";
                //echo error_reporting(E_ALL);
                    header('Location:https://www.thoughtbitz.ml/user/'.$ids);
                    
        }

     if(isset($_POST['update3'])){
        $Description=$_POST['Description'];
         $query="update user set description='".$Description."' where userid=$userid;";
        mysqli_query($_SESSION['connection'],$query);
       echo "<script>console.log('hii')</script>";
        header('Location:./user/'.$ids);
        
    }

?>