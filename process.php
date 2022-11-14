<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$html = "<h1>Hello </h1>";
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;                                 
    $mail->Username   ='mubintourism1@gmail.com';             
    $mail->Password   = 'grgyqzzyboxgeliz';   
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = 'ssl';                                  
    $mail->Port       = 465;                                  
/*$mail->SMTPOptions = array(
        'ssl'=>array(
            'verify_peer'=> false,
            'verify_peer_name' =>false,
            'allow_self_signed' =>true
            ));*/
    //Recipients
    $mail->setFrom('mubintourism1@gmail.com', 'domain Team');
    $mail->addAddress('info@beautifulsmileandhair.com ', 'Joe User');    
    // Attachments
    // Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'New Message From Website';
    $mail->Body    = " <h4> Mobile number : ( {$_POST['Name']} ) {$_POST['mobile_code']} Message: ({$_POST['Email']})</h4>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    //echo json_encode([ 'success' => true, 'message' => 'Sent Successfully ...' ]);;
header("Location: index.html?success");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}