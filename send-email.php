<?php
  $choice = $_POST['choice'];

  $to = "razgold7@gmail.com";
  $subject = "Button pressed: $choice";
  $message = "The user pressed the $choice button.";
  $headers = "From: razgold7@gmail.com";

  mail($to, $subject, $message, $headers);
?>
