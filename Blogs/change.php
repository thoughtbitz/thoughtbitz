<?php
    include '../database.php'; 
    mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
    $blogid=$_GET['blogid'];
    $chvalue=$_GET['value'];
    $query="select b.*,u.* from blogs b,user u where b.blogid='$blogid' and u.userid=b.userid1";
    $output=mysqli_query($_SESSION['connection'],$query);
    $blogarray=mysqli_fetch_array($output,true);
  
  $blogid=$_GET['blogid'];
  $change=$_GET['change'];
  $userid=$_GET['userid'];




  




    
  if($change==1){
      $q1="update blogs set blogtitle='$chvalue' where blogid=$blogid";
      mysqli_query($_SESSION['connection'],$q1);
      echo $change;


  }
  if($change==3){
      $q2="update blogs set categoryname='$chvalue' where blogid=$blogid";
       mysqli_query($_SESSION['connection'],$q2);
      echo $change;
  }
  if($change==4){
      $q3="update blogs set blogtext='$chvalue' where blogid=$blogid";
       mysqli_query($_SESSION['connection'],$q3);
      echo $change;

  }
  if($change==2){
      unlink('uploads/'.$blogarray['thumbnail']);
      function compress($source, $destination, $quality) {

		$info = getimagesize($source);

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($source);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($source);

		imagejpeg($image, $destination, $quality);

		return $destination;
}
	        $number=rand(10000,99999);
			$name=$_FILES["value"]["name"];
			$newname="uploads/".$number.$name;
			$destination_url=$newname;
			$source_img = $_FILES["value"]["tmp_name"];
			$fianl_file= compress($source_img,$destination_url, 50);
            $nameofimage=$number.$name;
            $q4="update blogs set thumbnail='$nameofimage' where blogid=$blogid";
            mysqli_query($_SESSION['connection'],$q4);


      echo $change;

  }




 ?>
