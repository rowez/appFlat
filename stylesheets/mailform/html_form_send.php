<?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "info.rowez@gmail.com";
	
	$email_subject = "Informatie formulier van de website";
	
	
	function died($error) {
		// your error code can go here
		echo "Sorry, er is een foutieve invoer geconstateerd..<br /><br />";
		echo $error."<br /><br />";
		echo "Klik op BACK of TERUG om de foutieve invoer aan te passen.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['voorletters']) ||
		!isset($_POST['meisjesnaam']) ||
		!isset($_POST['partner']) ||
		!isset($_POST['aanspreeknaam']) ||
		!isset($_POST['burgelijkestaat']) ||
		!isset($_POST['adres']) ||
		!isset($_POST['postcode']) ||
		!isset($_POST['woonplaats']) ||
	    !isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['mobiel']) ||
		!isset($_POST['geboortedatum']) ||
	    !isset($_POST['bsnnummer']) ||
	    !isset($_POST['verzekeraar']) ||
		!isset($_POST['polis']) ||
		!isset($_POST['polisnummer']) ||
		!isset($_POST['bevaldatum']) ||
		!isset($_POST['thuisbevallen']) ||
		!isset($_POST['zwangerschap']) ||
		!isset($_POST['kind']) ||
		!isset($_POST['verloskundige']) ||
		!isset($_POST['huisarts']) ||
		!isset($_POST['kraamzorg']) ||
		!isset($_POST['vanwie']) ||
		!isset($_POST['voorkeur']) ||
		!isset($_POST['datum']) ||
		!isset($_POST['plaats']) ||
		!isset($_POST['comments'])) {
			died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$voorletters = $_POST['voorletters']; // required
	$meisjesnaam = $_POST['meisjesnaam']; // required
	$partner = $_POST['partner']; // not required
	$aanspreeknaam = $_POST['aanspreeknaam']; // not required
	$burgelijkestaat = $_POST['burgelijkestaat']; // not required
	$adres = $_POST['adres']; // not required
	$postcode = $_POST['postcode']; // required
	$woonplaats = $_POST['woonplaats']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$mobiel = $_POST['mobiel']; // not required
	$geboortedatum = $_POST['geboortedatum']; // not required
	$bsnnummer = $_POST['bsnnummer']; // not required
	$verzekeraar = $_POST['verzekeraar']; // not required
	$polis = $_POST['polis']; // not required
	$polisnummer = $_POST['polisnummer']; // not required
	$bevaldatum = $_POST['bevaldatum']; // not required
	$thuisbevallen = $_POST['thuisbevallen']; // not required
	$zwangerschap = $_POST['zwangerschap']; // not required
	$kind = $_POST['kind']; // not required
	$verloskundige = $_POST['verloskundige']; // not required
	$huisarts = $_POST['huisarts']; // not required
	$kraamzorg = $_POST['kraamzorg']; // not required
	$vanwie = $_POST['vanwie']; // not required
	$voorkeur = $_POST['voorkeur']; // not required
	$datum = $_POST['datum']; // not required
	$plaats = $_POST['plaats']; // not required
	$comments = $_POST['comments']; // required
	
	
	
	$error_message = "";
	$error_message = "";

	$string_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($string_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

	$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$voorletters)) {
  	$error_message .= 'Je hebt geen juiste voorletters ingevoerd.<br />';
  }
  if(!preg_match($string_exp,$meisjesnaam)) {
  	$error_message .= 'Je hebt geen juiste meisjesnaam ingevoerd.<br />';
  }
    if(!preg_match($string_exp,$partner)) {
  	$error_message .= 'Je hebt geen juiste partner ingevoerd.<br />';
  }
      if(!preg_match($string_exp,$aanspreeknaam)) {
  	$error_message_nm .= 'Je hebt geen juiste aanspreeknaam ingevoerd.<br />';
  }
        if(!preg_match($string_exp,$burgelijkestaat)) {
  	$error_message_nm .= 'Je hebt geen juiste keuze burgelijke staat ingevoerd.<br />';
  }
        $string_exp = '"^[0-9 .-]+$"';
	if(!preg_match($string_exp,$telephone)) {
  	$error_message_nm .= 'Je hebt geen juist telefoonnummer (vaste lijn) ingevoerd.<br />';
  }
  	if(!preg_match($string_exp,$polisnummer)) {
  	$error_message_nm .= 'Je hebt geen juist polisnummer ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$bevaldatum)) {
  	$error_message_nm .= 'Je hebt geen juiste bevaldatum ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$mobiel)) {
  	$error_message_nm .= 'Je hebt geen juist mobiel nummer ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$geboortedatum)) {
  	$error_message_nm .= 'Je hebt geen juiste geboortedatum ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$bsnnummer)) {
  	$error_message_nm .= 'Je hebt geen juist bsn-nummer ingevoerd.<br />';
  }
  	if(!preg_match($string_exp,$datum)) {
  	$error_message_nm .= 'Je hebt nog geen datum ingevuld m.b.t. het invullen van dit formulier.<br />';
  }

	$string_exp = '/^[A-Za-z0-9._%-]+$/';
	if(!preg_match($string_exp,$postcode)) {
  	$error_message_nm .= 'Je hebt geen juiste postcode ingevoerd.<br />';
  }
  
      $string_exp = '/^((\p{L}\p{M}*)|(\p{Cc})|(\p{P}\p{P}\p{N}.{3})|(\p{N})|(\p{Zs}))+$/ui';
	if(!preg_match($string_exp,$adres)) {
  	$error_message_nm .= 'Je hebt geen juiste straat ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$woonplaats)) {
  	$error_message_nm .= 'Je hebt geen juiste woonplaats ingevoerd.<br />';
  }
     $string_exp = '/^((\p{L}\p{M}*)|(\p{Cc})|(\p{P}\p{P}\p{N}.{3})|(\p{N})|(\p{Zs}))+$/ui';
     if(!preg_match($string_exp,$verzekeraar)) {
  	$error_message_nm .= 'Je hebt geen juiste verzekeraar ingevoerd.<br />';
  }
      if(!preg_match($string_exp,$polis)) {
  	$error_message_nm .= 'Je hebt geen juist polis/pakket ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$zwangerschap)) {
  	$error_message_nm .= 'Je hebt geen juist aantal zwangerschap(pen) ingevoerd.<br />';
  }
          if(!preg_match($string_exp,$thuisbevallen)) {
  	$error_message_nm .= 'Je hebt geen juiste keuze bij thuis bevallen ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$kind)) {
  	$error_message_nm .= 'Je hebt geen juist aantal kind(eren) ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$verloskundige)) {
  	$error_message_nm .= 'Je hebt geen naam verloskundige ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$huisarts)) {
  	$error_message_nm .= 'Je hebt geen naam huisarts ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$kraamzorg)) {
  	$error_message_nm .= 'Je hebt niets over eerdere kraamzorg ingevoerd.<br />';
  }
	if(!preg_match($string_exp,$vanwie)) {
  	$error_message_nm .= 'Je hebt niets ingevuld van wie u kraamzorg heeft gehad.<br />';
  }
	if(!preg_match($string_exp,$voorkeur)) {
  	$error_message_nm .= 'Je hebt niets ingevuld aan wie u de voorkeur geeft.<br />';
  }
	if(!preg_match($string_exp,$plaats)) {
  	$error_message_nm .= 'Je hebt nog geen plaats ingevuld m.b.t. het invullen van dit formulier.<br />';
  }
  
  
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	  }
	  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Aanvraaggegevens website formulier.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "voorletters: ".clean_string($voorletters)."\n";
	$email_message .= "meisjesnaam: ".clean_string($meisjesnaam)."\n";
	$email_message .= "partner: ".clean_string($partner)."\n";
	$email_message .= "aanspreeknaam: ".clean_string($aanspreeknaam)."\n";
	$email_message .= "burgelijkestaat: ".clean_string($burgelijkestaat)."\n";
	$email_message .= "adres: ".clean_string($adres)."\n";
	$email_message .= "postcode: ".clean_string($postcode)."\n";
	$email_message .= "woonplaats: ".clean_string($woonplaats)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "mobiel: ".clean_string($mobiel)."\n";
	$email_message .= "geboortedatum: ".clean_string($geboortedatum)."\n";
	$email_message .= "bsnnummer: ".clean_string($bsnnummer)."\n";
	$email_message .= "verzekeraar: ".clean_string($verzekeraar)."\n";
	$email_message .= "polis: ".clean_string($polis)."\n";
	$email_message .= "polisnummer: ".clean_string($polisnummer)."\n";
	$email_message .= "bevaldatum: ".clean_string($bevaldatum)."\n";
	$email_message .= "thuisbevallen: ".clean_string($thuisbevallen)."\n";
	$email_message .= "zwangerschap: ".clean_string($zwangerschap)."\n";
	$email_message .= "kind: ".clean_string($kind)."\n";
	$email_message .= "verloskundige: ".clean_string($verloskundige)."\n";
	$email_message .= "huisarts: ".clean_string($huisarts)."\n";
	$email_message .= "kraamzorg: ".clean_string($kraamzorg)."\n";
	$email_message .= "vanwie: ".clean_string($vanwie)."\n";
	$email_message .= "voorkeur: ".clean_string($voorkeur)."\n";
	$email_message .= "datum: ".clean_string($datum)."\n";
	$email_message .= "plaats: ".clean_string($plaats)."\n";
	
	
	
	
	
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
