<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'noreply@yourwebsite.com';
    $email_subject = 'New Form Submission';
    $email_body = "Name: $name\nEmail: $visitor_email\nMessage:\n$message";
    $to = 'vanyaneuer@gmail.com';
    
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";
    
    if (mail($to, $email_subject, $email_body, $headers)) {
      echo "Message sent successfully.";
    } else {
      echo "Message failed to send.";
    }
  }
?>
