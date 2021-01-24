<?php
  include '../database.php';
  mysqli_select_db($_SESSION['connection'],'epiz_26661878_thoughts');
 extract($_POST);
 $userid=$_POST['userid'];
 $btext=$_POST['text'];
$blogtitle=$_POST['bt'];

date_default_timezone_set('Asia/Kolkata');
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
			$name=$_FILES["file"]["name"];
			$newname="uploads/".$number.$name;
			$destination_url=$newname;
			$source_img = $_FILES["file"]["tmp_name"];
			$fianl_file= compress($source_img,$destination_url, 50);
            $nameofimage=$number.$name;
            $category=$_POST['category'];
            $date=time();
$query ="insert into blogs(blogtitle,userid1,datetime,thumbnail,categoryname,blogtext) values ('$blogtitle','$userid','$date','$nameofimage','$category','$btext')";
$result = mysqli_query($_SESSION['connection'],$query);
if($result){
    $s=1;
echo $s;
}
?>