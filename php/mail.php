<?php


$con_name = $_POST['con_name'];
$con_email = $_POST['con_email'];
$con_mess = $_POST['con_message'];




$to = 'expjoomworker@gmail.com';
$subject = ($sub != '') ? $sub : 'Bike User Query';

$message = '<strong>Name : </strong>'.$con_name.'<br/><br/>';
$message .= '<strong>Last Name : </strong>'.$con_email.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$con_mess.'<br/><br/>';
$message .= $mess.'<br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;