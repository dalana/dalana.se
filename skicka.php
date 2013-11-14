<?php
   $author = $_REQUEST['author'];
   $email = $_REQUEST['email'];
   $to = 'jimmy@dalana.se' ;     //put your email address on which you want to receive the information
   $subject = $_REQUEST['subject'] . " - dalana.se kontakt";
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= "From: $author<$email> \r\n";
   $headers .= "Return-Path: <$to> \r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $message = $_REQUEST['text'];
   mail($to, $subject, $message, $headers);
   header ('Location: kontakt.php');
?>
