<?php
require_once('../include/phpmailer/class.phpmailer.php');

if(isset($_GET['senderf']) && isset($_GET['senderl']) && isset($_GET['receiverf']) && isset($_GET['receiverl']) && isset($_GET['mtrn1']) && isset($_GET['mtrn5']) && isset($_GET['mtrn10']) && isset($_GET['agentid']) && isset($_GET['accountid'])) {

    $senderf        = $_GET['senderf'];
    $senderl        = $_GET['senderl'];
    $receiverf      = $_GET['receiverf'];
    $receiverl      = $_GET['receiverl'];
    $mtrn1          = $_GET['mtrn1'];
    $mtrn5          = $_GET['mtrn5'];
    $mtrn10         = $_GET['mtrn10'];
    $agentid        = $_GET['agentid'];
    $accountid      = $_GET['accountid'];
}
//echo $senderf;
//echo $senderl ;
//echo $receiverf ;
//echo $receiverl;
//echo $mtrn1 ;
//echo $mtrn5 ;
//echo $mtrn10;
//echo $agentid;
//echo $accountid;

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = "Welcome to our Company";
//$body             = eregi_replace("[\]",'',$body);

//$mail->AddReplyTo("semsemea.a@hotmail.com","Alaa Semsemea");


//$address ="a.alsirafy@sneco.nl";
$address1= "semsemea.a@hotmail.com";
$address2="aylosa@outlook.com";

//$mail->AddAddress($address, "Anas Alsirafy");
$mail->AddCC($address1, "Alaa Semsemea");
$mail->AddCC($address2, "Ayham Najem");

$mail->Subject    = "Your Invoice";

//$mail->AltBody    = ""; // optional, comment out and test

$mail->MsgHTML($body);
$pdf= "{$senderf}{$senderl}{$receiverf}{$receiverl}{$mtrn1}{$mtrn5}{$mtrn10}{$agentid}{$accountid}.pdf";
$mail->AddAttachment("pdf/$pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: agentscripts/transaction.php");
}
?>
