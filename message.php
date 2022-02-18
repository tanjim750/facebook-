<?php
  $fast_name = htmlspecialchars($_POST['fast_name']);
  $last_name = htmlspecialchars($_POST['last_name']);
  $email = htmlspecialchars($_POST['email']);
  
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "mdtanjim750@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $fast_name <$email>";
      $body = "Name: $fast_name\nEmail: $email\nlast_name: $fast_name\n\nMessage:\n$message\n\nRegards,\n$fast_name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>