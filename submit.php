<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "admin@emailadress.com";

  // Set the subject of the email
  $emailSubject = "$subject";

  // Set the body of the email
  $emailBody = "Name: $name\n\n";
  $emailBody .= "Email: $email\n\n";
  $emailBody .= "Subject: $subject\n\n";
  $emailBody .= "Message:\n\n$message";

  // Set additional headers
   $headers = "From: Site Name" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";

  // Send the email
  $success = mail($to, $emailSubject, $emailBody, $headers);

  // Check if the email was sent successfully
  if ($success) {
    echo json_encode(array("message" => "Form submitted successfully"));
  } else {
    echo json_encode(array("message" => "Error: Failed to submit the form"));
  }
}
?>
