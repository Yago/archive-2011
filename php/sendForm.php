<?php
########################################
# sendForm.php                         #
# form to email gateway                #
# form must be in post method set      #
# email input must have email as name  #
############# 2010 oliv.tv #############

$to = "yago3331@hotmail.com";
$mailSubject = "Contact depuis le site web";
$confirmationPageUrl = "../index.php";

########### DON'T EDIT BELOW ###########
// mail input check
if (!isset($_POST['email'])) {
	$fromMail = 'contact';
} else {
	$fromMail = $_POST['email'];
}

// message content construction
$content = '<strong>Informations reçues de '.$fromMail.'</strong><br /><br />'."\r\n";
foreach ($_POST as $key => $value) {
	if (is_array($value)) {
		$tmp = '';
		foreach($value as $val) {
			$tmp .= $val.', ';
		}
		$value = substr($tmp, 0, strlen($tmp)-2);
	}
	$content .= '<strong>'.$key.'</strong><br />'."\r\n".str_replace("\r","<br />",$value).'<br />'."\r\n";
}
// html message construction
$message  = '<html>'."\r\n".'<head>'."\r\n";
$message .= '<title>Calendrier des anniversaires pour Août</title>'."\r\n";
$message .= '</head>'."\r\n".'<body>'."\r\n";
$message .= $content;
$message .= '</body>'."\r\n".'</html>';

// html mail headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headers .= 'To: '.$to."\r\n";
$headers .= 'From: '.$fromMail."\r\n";

// mail function
mail($to, $mailSubject, $message, $headers);

// redirection
header("location:".$confirmationPageUrl);
?>