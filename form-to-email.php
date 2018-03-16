<?php
/*if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}



$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($visitor_email)||empty($message)) 
{
    echo "Email and message are mandatory";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'serwer1629715@movido.pl';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $visitor_email.\n".
    "Here is the message:\n $message";
    
$to = "biuro@movido.pl";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header('Location:thank-you.html');
*/

if(isset($_POST['submit']))
{
  $secret = "6LeuvkUUAAAAAOWEdOPd5kyZnq_TeGQOOou9O2Hy";
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $url = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip');
  print($url);
  

  
}












function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

   
?> 