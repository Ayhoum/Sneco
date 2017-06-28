<?php
require_once('agentscripts/gpdf.php');
require_once('phpmailer/class.phpmailer.php');



$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = "Welcome to our Company";
//$body             = eregi_replace("[\]",'',$body);

//$mail->AddReplyTo("semsemea.a@hotmail.com","Alaa Semsemea");


$address = "aylosa@outlook.com";
$address1= "semsemea.a@hotmail.com";

$mail->AddAddress($address, "Ayham Najem");
$email->AddCC($address1, "Alaa Semsemea");

$mail->Subject    = "Your Invoice";

//$mail->AltBody    = ""; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAttachment("pdf/{$fsender_name}{$lsender_name}{$freceiver_name}{$lreceiver_name}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$account_Id}.pdf\"");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
?>
