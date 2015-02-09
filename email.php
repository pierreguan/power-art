<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $objet = $_POST['subject'];
  $message = $_POST['message'];
  $to = "speed_cube@hotmail.com";

  // If there are no errors, send the email
  if (mail ("$to", "$objet", "$message", "From: $email")) {
    $result='<div class="success">Votre message a bien été envoyé ! Nous vous recontacterons dès que possible.</div>';
  }
  else {
    $result='<div class="fail">Il y a eu un problème, veuillez essayer à nouveau.</div>';
  }
}
?>

<?php
if ($_POST["submit"]) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $objet = $_POST['subject'];
  $message = $_POST['message'];
  $from = 'Demo Contact Form';
  $to = 'speed_cube@hotmail.com';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  // Check if name has been entered
  if (!$_POST['name']) {
    $errName = 'Vous devez renseigner un nom';
  }

  // Check if email has been entered and is valid
  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
  }

  //Check if message has been entered
  if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
  }

  // If there are no errors, send the email
  if (!$errName || !$errEmail || !$errMessage || !$errHuman) {
    if (mail ($to, $objet, $body, $from)) {
      $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
  }
}
?>