<?php
  session_start();

  $to = "Peter.p.maltby@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  echo("proccessing.");
$error = null;
  //name checks
  if($_POST['name']==null) {
    $error = $error . "<li>Name field empty.</li>";
  }
  //email checks
  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error = $error . "<li>Invalid email</li>";
  }

  //subject checks
  if($_POST['subject']==null) {
    $error = $error . "<li>Subject field empty.</li>";
  }
  //message checks
 $message = wordwrap($_POST['message'], 70, "<br />\n");
 $message .= "Message from : " . $_POST['name'];

 if($error==null) {
   if(!mail($to,$_POST['subject'],$message,$header)) {
     $error = $error . "<li>There was an error on our end; please try again.</li>";
   }
 }

  if($error!=null) {
    $_SESSION['error'] = $error;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['subject'] = $_POST['subject'];
    $_SESSION['message'] = $_POST['message'];
  }
  header('Location:index.php#contact');
?>
