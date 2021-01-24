<?php
    require('fpdf.php');
    $mode=$_GET['mode'];
    $txt=$_GET['userid'];
    $coursename = $_GET['coursename'];
    $image = ImageCreateFromJPEG('./certificate-thoughtbitz.jpeg'); 
    $color = imagecolorallocate($image, 0, 0, 0);
    $color2=imagecolorallocate($image,255, 102, 0);
    $date="date:".date("d/m/Y");
    $font = realpath('./Aller/Aller_BdIt.ttf'); // path to font
    $sign="presented by:";
    imagettftext($image,50,0,300,300, $color2, $font, $txt );
    imagettftext($image,45,0,200,490, $color, $font, $coursename );
    imagettftext($image,20,0,100,860, $color, $font, $date );
    imagettftext($image,10,0,680,860, $color, $font, $sign );
    imagettftext($image,20,0,680,890, $color, $font,"ThoughtBitz");
    $id = "Certificate ID : ".urlencode($txt);
    imagettftext($image,10,0,680,925, $color, $font,$id);
if($mode==0){    
    $download="ThoughtBitz  ".$id.".jpeg";
    header( 'Content-Disposition: attachment; filename*=UTF-8\'\'' . rawurlencode($download) );
    header('Content-type:image/jpeg');
    imagejpeg($image);
    echo base64_decode($image);
}

if($mode==1){
    $image1 = $image;
    imagejpeg($image1,'./certificate1.jpeg');
    $download=$txt.$coursename.".pdf";
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image('./certificate1.jpeg',20,40,170,170);
    $pdf->Output('D',$download);
    unlink('./certificate1.jpeg');
}

?>