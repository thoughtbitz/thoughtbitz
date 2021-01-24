<?php
    include '../../database.php';
    $b = $_COOKIE['userid'];
    $lid = trim(base64_decode(urldecode($_GET['lid'])),"dashboard viewposts");
    $con=$_SESSION['connection'];
    $con1=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$con1){
      echo" connection unsuccessful";
    }
    $q ="update c_course set quiz = 1 where uid = $b and lid = $lid ";
    $result = mysqli_query($con,$q);
    
   if($lid == 1){
         header("Location:java_card_structure.php");
    }
    if($lid == 2){
         header("Location:c_card_structure.php");
    }
    if($lid == 3){
         header("Location:cpp_card_structure.php");
        }

?>