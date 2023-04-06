<?php
if(isset($_POST['submit'])) {
  $to = "kazwolff85@gmaill.com";
  $subject = "Website Inquery- ";
  $name =  $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  mail($to, $subject, $message, $name, $email);
  echo "Email sent!";
}
?>