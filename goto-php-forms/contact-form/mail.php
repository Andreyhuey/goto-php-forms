<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];


  $content="From: \n\n$name \n\nEmail: $email \n\nSubject: $subject  \n\nMessage: $message";
  $recipient = "developer@email.com";
  $mailheader = "From: $name \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
?>