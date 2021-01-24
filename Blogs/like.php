<?php
  
  include '../database.php';
 
    mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
  $userid=$_COOKIE['userid'];
   $blogid=$_GET['blogid'];
  $q="select * from main where userid='$userid' and blogid='$blogid'";
  $result=mysqli_query($_SESSION['connection'],$q);
  $gh=mysqli_fetch_array($result);
  $num = mysqli_num_rows($result);
  $dpsObj=(Object)array();
  if($num==0 && isset($_COOKIE["userid"])){

    $q1="INSERT INTO main (userid, blogid, view, like_name) VALUES ( '$userid', '$blogid', 1, 1);";
    mysqli_query($_SESSION['connection'],$q1);
    $dpsObj->number1=1;
  }
  else if($num>=1 && isset($_COOKIE["userid"])){
    $q1="delete from main where userid=$userid and blogid=$blogid";
    mysqli_query($_SESSION['connection'],$q1);
$dpsObj->number1=0;


  }
  $queries="select count(like_name) as counts from main where blogid='$blogid' group by blogid";
  $result1=mysqli_query($_SESSION['connection'],$queries);
  $num1=mysqli_fetch_array($result1);
  $dpsObj->number2=$num1['counts'];
$dpsjson=json_encode($dpsObj);

echo $dpsjson;
 ?>
