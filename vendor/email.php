<?php
mb_internal_encoding("UTF-8");

$to = 'iteyeturk@gmail.com';


$subject = 'Message from Landing page';
$sender = 'info@bravadent.net';

$name = "";
$phone = "";
$message = "";
$body="";


if( isset($_POST['name']) ){
    $name = $_POST['name'];
    //echo $name;

    $body .= "Name: ";
    $body .= $name;
    $body .= "\n\n";
}

if( isset($_POST['phone']) ){
    $phone = '+'.$_POST['full_phone']. $_POST['phone'];
    //echo $phone;

    $body .= "";
    $body .= "Phone: ";
    $body .= $phone;
    $body .= "\n\n";
}
if( isset($_POST['message']) ){
    $message = $_POST['message'];
    //echo $message;

    $body .= "";
    $body .= "Message: ";
    $body .= $message;
    $body .= "\n\n";
}

$headers = 'From: ' .$sender . "\r\n";

if (empty($name) )
{echo '<div class="status-icon invalid">Please enter your name</div>';die();}

if (empty($phone) ){echo '<div class="status-icon invalid">Please enter your phone number</div>';die();}

if (empty($message) ){echo '<div class="status-icon invalid">Please enter your message</div>';die();}

if (filter_var($sender, FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, $body, $headers);
    echo '<div class="status-icon valid">Thank you, we will get back to you as soon as possible</div>';
}
else{
    echo '<div class="status-icon invalid">Sorry there was an error please try again later</div>';
}
/*
 $ResponsibleUser =    $_POST['ResponsibleUser'];
	 $LeadSource =$_POST['LeadSource'];
	 $formId =$_POST['formId'];
	 $LastName =$_POST['LastName'];

$post = [
    'formId' => $formId,
    'ResponsibleUser' => $ResponsibleUser,
    'LeadSource'   => $LeadSource,
    'FirstName'   => $FirstName,
    'LastName'   => "0",
    'email'   => $email,
    'phone'   => $phone,
    'Description'   => $message,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://ioyy1ndo.insight.ly/WebToLead/Create");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
// execute!
$response = curl_exec($ch);
// close the connection, release resources used
curl_close($ch);

*/
