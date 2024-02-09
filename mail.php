<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $message = $_POST["message"];
  
  // Set the recipient email address
  $to = "rahulbommidi17@gmail.com";
  
  // Set the email subject and message body
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\nNumber: $number\nMessage: $message";
  
  // Set the email headers
  $headers = "From: rahulbommidi17@gmail.com\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Send the email
  if (mail($to, $subject, $body, $headers)) 
  { echo "<script type='text/javascript'>
    window.setTimeout(function() {
        window.location.href='thankyou.php';
    }, 7000);
</script>";

  } else {
    // If the email fails to send, display an error message
    echo "Error sending email.";
  }
}
?>