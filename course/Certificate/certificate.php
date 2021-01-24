<?php
header('Content-Type:img/jpeg');
$font="./Aller/Aller_BdIt.ttf";
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,0,0,0);
$name="SUNDAR PICHAI";
imagettftext($image,98,0, 1180, 1150,$color,$font,$name); 
imagejpeg($image);
imagedestroy($image);

?>
