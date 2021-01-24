<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/functions.php';
require_once __DIR__.'/config.php';


class Thoughtbitzmail{
    function mailparameters($email,$subject,$body){
$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    


  //check query is execute successfully or not
    
    //Server settings
    $mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
    $mail->isSMTP();
    $mail->Host = CONTACTFORM_SMTP_HOSTNAME;
    $mail->SMTPAuth = true;
    $mail->Username = CONTACTFORM_SMTP_USERNAME;
    $mail->Password = CONTACTFORM_SMTP_PASSWORD;
    $mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
    $mail->Port = CONTACTFORM_SMTP_PORT;

    // Recipients
     $mail->setFrom('help.thoughtbitz@gmail.com', 'thoughtbitz');
    $mail->addAddress($email);
    $mail->addReplyTo('help.thoughtbitz@gmail.com');

    // Content
     $mail->isHTML(true); //false if you don't use html.
    $mail->Subject = $subject;
    
      
      //email body
      $mail->Body = $body;
if($mail->send())
{
    return true;
}
else{
    return false;
}
        //mail not send
  


} catch (Exception $e) {
    redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}
}
}
?>