<?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "example@example.com";
	
	$email_subject = "Informatie formulier van de website";
	
	
	function died($error) {
		// your error code can go here
		echo "Sorry, er is een foutieve invoer geconstateerd..<br /><br />";
		echo $error."<br /><br />";
		echo "Klik op BACK of TERUG om de foutieve invoer aan te passen.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['email']) ||
		!isset($_POST['comments'])) {
			died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$email_from = $_POST['email']; // required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$error_message = "";

	$string_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($string_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
	$string_exp = "/^[A-Za-z .'-]+$/";
    $string_exp = '"^[0-9 .-]+$"';
	$string_exp = '/^[A-Za-z0-9._%-]+$/';
    $string_exp = '/^((\p{L}\p{M}*)|(\p{Cc})|(\p{P}\p{P}\p{N}.{3})|(\p{N})|(\p{Zs}))+$/ui';
    $string_exp = '/^((\p{L}\p{M}*)|(\p{Cc})|(\p{P}\p{P}\p{N}.{3})|(\p{N})|(\p{Zs}))+$/ui';

  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	  }
	  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Comments website formulier.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}

	$email_message .= "Email: ".clean_string($email_from)."\n";
	
	$email_message .= "Comments: ".clean_string($comments)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- place your own success html below -->

Dank voor het invullen van het formulier. We nemen snel contact met je op.

<?php
}
die();
?>
