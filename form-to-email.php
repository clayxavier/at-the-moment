<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
    $inputFirstName = $_POST['inputFirstName']; // required
    $inputLastName = $_POST['inputLastName']; // required
    $inputEmail = $_POST['inputEmail']; // required
    $inputSubject = $_POST['inputSubject']; // not required
    $inputMessage = $_POST['inputMessage']; // required

$email_from = 'inputEmail';//<== update the email address
$email_subject = "inputSubject";
$email_body = "You have received a new message from the user $inputFirstName.\n".
    "Here is the message:\n $message".
    
$to = "tom@amazing-designs.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
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