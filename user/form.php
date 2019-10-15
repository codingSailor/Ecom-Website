<?php

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$mailmessage = 'You got a mail from '.$first.''.$last.' who said the followin : \r\n'.$message;

$to = 'akshaybadhe@gmail.com';
$subject = 'Customer feedback form';
$headers = 'form:'.$email;

mail($to,$subject,$message,$headers);

header('Location: index.html ');
?>