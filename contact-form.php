<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "clayxavier@alldayplay.fm";
     
    $email_subject = "website html form submissions";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['inputFirstName']) ||
        !isset($_POST['inputLastName']) ||
        !isset($_POST['inputEmail']) ||
        !isset($_POST['inputSubject']) ||
        !isset($_POST['inputMessage'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $inputFirstName = $_POST['inputFirstName']; // required
    $inputLastName = $_POST['inputLastName']; // required
    $inputEmail = $_POST['inputEmail']; // required
    $inputSubject = $_POST['inputSubject']; // not required
    $inputMessage = $_POST['inputMessage']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($inputFirstName)."\n";
    $email_message .= "Last Name: ".clean_string($inputLastName)."\n";
    $email_message .= "Email Address: ".clean_string($inputEmail)."\n";
    $email_message .= "Subject: ".clean_string($inputSubject)."\n";
    $email_message .= "Message: ".clean_string($inputMessage)."\n";
     
     
// create email headers
$headers = 'From: '.$inputEmail."\r\n".
'Reply-To: '.$inputEmail."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
die();
?>