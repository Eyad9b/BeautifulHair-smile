<?php


// Subscribe my channel if you are using this code
// Subscribe my channel if you are using this code
// Subscribe my channel if you are using this code
// Subscribe my channel if you are using this code
// Subscribe my channel if you are using this code


use PHPMailer\PHPMailer\PHPMailer;
function sendmail(){
    $name = $_POST['name'];  // Name of your website or yours
    $to="iteyeturk@gmail.com";  // mail of reciever
    $subject = "Tutorial or any subject";
    $body = "Send Mail Using PHPMailer - MS The Tech Guy";
    $from = $_POST['Email'];  // you mail
    $password = "yourpassword";  // your mail password

    // Ignore from here

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    $mail = new PHPMailer();

    // To Here

    //SMTP Settings
    $mail->isSMTP();
    // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
    $mail->Host = "smtp.gmail.com"; // smtp address of your email
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = $password;
    $mail->Port = 587;  // port
    $mail->SMTPSecure = "tls";  // tls or ssl
    $mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ]);

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($from, $name);
    $mail->addAddress($to); // enter email address whom you want to send
    $mail->Subject = ("$subject");
    $mail->Body = $body;
    if ($mail->send()) {
        echo "Email is sent!";
    } else {
        echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }
}
if (isset($_POST['sendmail'])) {
    sendmail();
}
?>
<!--
$name = $_POST['name'];
$mail = $_POST['Email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$mailheader= "From: ".$name."< " .$email.">\r\n";

$recive="iteyeturk@gmail.com";
mail($recive,$subject,$message,$mailheader)
or die('erroe');
echo 'message send';
?>
-->