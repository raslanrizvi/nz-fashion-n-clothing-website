<?php


$con_name = $_REQUEST ['con_name'];
$con_email = $_REQUEST ['con_email'];
$con_mess = $_REQUEST ['con_message'];

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";




$to = 'raslan@muchi.lk';
$subject = "Customer Inquiry";

$message = '<strong>Name : </strong>'.$con_name.'<br/><br/>';
$message .= '<strong>Last Name : </strong>'.$con_email.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$con_mess.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$con_email.'>' . "\r\n";

mail($to, $subject, $message, $headers);
