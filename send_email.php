<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first-name"];
  $last_name = $_POST["last-name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "yahyaouerdighi2017@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "<p>Thanks for submitting!</p>";
  } else {
    echo "<p>There was an error sending your message. Please try again later.</p>";
  }
}
?>