<?php
require_once("sql_connect.php");
// the message
$txt = "Thanks for registering with the Sudo Store!";
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$to = "ahmedballal196@gmail.com";
$subject = "simple emails with php";

$headers = "From: You <noreply@gmail.com>";
// send email
if(mail($to, $subject, $txt, $headers) )
  echo 'success';
else
  echo 'not sent';
?>